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
                "api_version" => "v1",
                "content_type" => "JSON",
                "organization" => "jcomte23",               
                "response_description" => "List of products",
                'authors' => [
                    [
                        "name" => "Javier Cómbita Téllez",
                        "email" => "jcomte23@outlook.com",
                        "homepage" => "https://javiercombita.com",
                        "role" => "Lead Developer"
                    ]
                ],
            ],
        ];
    }
}
