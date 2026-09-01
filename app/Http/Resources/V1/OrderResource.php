<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'template_id' => $this->id_template,
            'user_id'     => $this->id_user,
            'encrypted'   => $this->encrypted,
            'template'    => $this->whenLoaded('template'),
            'user'        => $this->whenLoaded('user'),
            'mPria'       => $this->whenLoaded('mPria'),
            'mWanita'     => $this->whenLoaded('mWanita'),
            'data'        => $this->whenLoaded('data'),
            'fitur'       => $this->whenLoaded('fitur'),
            'created_at'  => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at'  => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
