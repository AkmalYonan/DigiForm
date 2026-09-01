<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Resources\V1\PaketResource;
use App\Models\Paket;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaketController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $pakets = Paket::all();
        return $this->sendResponse(PaketResource::collection($pakets), 'Pakets retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'namaPaket'  => 'required|string|max:255',
            'hargaPaket' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 422);
        }

        $paket = new Paket();
        $paket->nama = $input['namaPaket'];
        $paket->harga = $input['hargaPaket'];
        $paket->save();

        return $this->sendResponse(new PaketResource($paket), 'Paket created successfully.', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $paket = Paket::find($id);

        if (is_null($paket)) {
            return $this->sendError('Paket not found.');
        }

        return $this->sendResponse(new PaketResource($paket), 'Paket retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'namaBaru'  => 'required|string|max:255',
            'hargaBaru' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 422);
        }

        $paket = Paket::find($id);

        if (is_null($paket)) {
            return $this->sendError('Paket not found.');
        }

        $paket->nama = $input['namaBaru'];
        $paket->harga = $input['hargaBaru'];
        $paket->save();

        return $this->sendResponse(new PaketResource($paket), 'Paket updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $paket = Paket::find($id);

        if (is_null($paket)) {
            return $this->sendError('Paket not found.');
        }

        $paket->delete();

        return $this->sendResponse([], 'Paket deleted successfully.');
    }
}
