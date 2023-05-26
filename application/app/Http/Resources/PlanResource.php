<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'plan_type' => $this->plan_type,
            'plan_details' => $this->plan_details,
            'area' => $this->area,
            'user_id' => $this->user_id,
        ];
    }
}
