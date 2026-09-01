<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Resources\V1\OrderResource;
use App\Models\Data;
use App\Models\Detail_fitur;
use App\Models\Mempelai_pria;
use App\Models\Mempelai_wanita;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OrderController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $orders = Pesan::with(['template', 'user', 'fitur', 'mPria', 'mWanita', 'data'])->get();
        return $this->sendResponse(OrderResource::collection($orders), 'Orders retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'template_id' => 'required|exists:template,id',
            'nama_mempelai_pria' => 'required|string',
            'nama_mempelai_wanita' => 'required|string',
            // Add other validations as needed, simplified for API example
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 422);
        }

        DB::beginTransaction();
        try {
            $user_id = auth()->id();
            $lastId = Pesan::max('id');
            $id = $lastId ? $lastId + 1 : 1;

            User::where('id', $user_id)->update(['is_order' => 1]);
            $user = User::find($user_id);

            $pesan = new Pesan();
            $pesan->id = $id;
            $pesan->id_user = $user_id;
            $pesan->encrypted = Hash::make($user->name);
            $pesan->id_template = $request->input('template_id');
            $pesan->save();

            // Simplified Store related data (ignoring files for now or handling as needed)
            $mPria = new Mempelai_pria();
            $mPria->id_pesan = $id;
            $mPria->nama_pria = $request->input('nama_mempelai_pria');
            $mPria->save();

            $mWanita = new Mempelai_wanita();
            $mWanita->id_pesan = $id;
            $mWanita->nama_wanita = $request->input('nama_mempelai_wanita');
            $mWanita->save();

            $data = new Data();
            $data->id_pesan = $id;
            $data->nama_pasangan = $request->input('nama_mempelai_pria') . '&' . $request->input('nama_mempelai_wanita');
            $data->save();

            DB::commit();

            return $this->sendResponse(new OrderResource($pesan->load(['template', 'user', 'fitur', 'mPria', 'mWanita', 'data'])), 'Order created successfully.', 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->sendError('Order creation failed.', [$e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $order = Pesan::with(['template', 'user', 'fitur', 'mPria', 'mWanita', 'data'])->find($id);

        if (is_null($order)) {
            return $this->sendError('Order not found.');
        }

        return $this->sendResponse(new OrderResource($order), 'Order retrieved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $order = Pesan::find($id);

        if (is_null($order)) {
            return $this->sendError('Order not found.');
        }

        // Logic from web: deleteUser actually deletes the user? 
        // Let's stick to deleting the order (Pesan) and related data if cascading is enabled or manual.

        $order->delete();

        return $this->sendResponse([], 'Order deleted successfully.');
    }
}
