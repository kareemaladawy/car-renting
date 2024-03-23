<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'body_type' => $this->body_type,
            'make' => $this->make,
            'model' => $this->model,
            'year' => $this->year,
            'price' => $this->price,
            'daily_rate' => $this->daily_rate,
            'color' => $this->color,
            'seats' => $this->seats,
            'engine_capacity' => $this->engine_capacity,
            'image' => $this->image
        ];
    }
}
