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
            'id' => (int) $this->id,
            'name' => (string) strtolower($this->name),
            'price' => (float) $this->price,
            'category' => (string) $category,
            'creationDate' => (string) $this->created_at,
            'lastUpdated' => (string) $this->updated_at
        ];
    }
}
