<?php

namespace App\Http\Resources\Api\V1;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => (string) $this->name,
            'price' => (float) $this->price,
            'creationDate' => (string) $this->created_at->diffForHumans(),
            'lastUpdated' => (string) $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
