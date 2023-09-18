<?php

namespace App\Http\Resources\Api\V1;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $category = $this->category ? $this->category->name : null; 

        return [
            'name' => (string) strtolower($this->name),
            'price' => (float) $this->price,
            'category' => (string) strtolower($this->name),
            'creationDate' => (string) $this->created_at->diffForHumans(),
            'lastUpdated' => (string) $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
