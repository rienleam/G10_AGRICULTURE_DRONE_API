<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DroneInforResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "drone_type" => $this->drone_type,
            "battery_status" => $this->battery_status,
            "payload_capacity" => $this->payload_capacity,
            "current_latitude" => $this->current_latitude,
            "current_longitude" => $this->current_longitude,
        ];
    }
}
