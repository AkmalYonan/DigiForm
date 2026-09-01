<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Resources\V1\FiturResource;
use App\Models\Fitur;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FiturController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $fiturs = Fitur::all();
        return $this->sendResponse(FiturResource::collection($fiturs), 'Fiturs retrieved successfully.');
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
            'namaFitur' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 422);
        }

        $fitur = new Fitur();
        $fitur->nama = $input['namaFitur'];
        $fitur->save();

        return $this->sendResponse(new FiturResource($fitur), 'Fitur created successfully.', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $fitur = Fitur::find($id);

        if (is_null($fitur)) {
            return $this->sendError('Fitur not found.');
        }

        return $this->sendResponse(new FiturResource($fitur), 'Fitur retrieved successfully.');
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
            'hargaBaru' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 422);
        }

        $fitur = Fitur::find($id);

        if (is_null($fitur)) {
            return $this->sendError('Fitur not found.');
        }

        $fitur->nama = $input['namaBaru'];
        if (isset($input['hargaBaru'])) {
            $fitur->harga = $input['hargaBaru'];
        }
        $fitur->save();

        return $this->sendResponse(new FiturResource($fitur), 'Fitur updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $fitur = Fitur::find($id);

        if (is_null($fitur)) {
            return $this->sendError('Fitur not found.');
        }

        $fitur->delete();

        return $this->sendResponse([], 'Fitur deleted successfully.');
    }
}
