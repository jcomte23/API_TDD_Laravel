<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    public $collects = ProductResource::class;

    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'authors' => [
                    'Javier Cómbita Téllez'
                ],
                'organization' => 'Jcomte23',
            ],
            'type' => 'products'
        ];
    }
}
