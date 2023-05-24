<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MapsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            "id"  => $this->id,
            "image" => $this->image,
            "farm_id" => $this->farm->name,
            "drone_id" => $this->drone->name,
        ];
    }
}
