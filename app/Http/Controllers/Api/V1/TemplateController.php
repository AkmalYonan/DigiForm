<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Resources\V1\TemplateResource;
use App\Models\Template;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemplateController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $templates = Template::all();
        return $this->sendResponse(TemplateResource::collection($templates), 'Templates retrieved successfully.');
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
            'namaTemplate' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 422);
        }

        $template = new Template();
        $template->nama = $input['namaTemplate'];
        $template->save();

        return $this->sendResponse(new TemplateResource($template), 'Template created successfully.', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $template = Template::with('pakets')->find($id);

        if (is_null($template)) {
            return $this->sendError('Template not found.');
        }

        return $this->sendResponse(new TemplateResource($template), 'Template retrieved successfully.');
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
            'namaBaru' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 422);
        }

        $template = Template::find($id);

        if (is_null($template)) {
            return $this->sendError('Template not found.');
        }

        $template->nama = $input['namaBaru'];
        $template->save();

        return $this->sendResponse(new TemplateResource($template), 'Template updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $template = Template::find($id);

        if (is_null($template)) {
            return $this->sendError('Template not found.');
        }

        $template->delete();

        return $this->sendResponse([], 'Template deleted successfully.');
    }
}
