<?php

namespace Tests\Feature\Api\V2;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    private string $url = "api/v2/products";

    public function test_it_can_list_products()
    {
        Product::factory(5)->create();
        $response = $this->getJson($this->url);
        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonCount(5, 'data');
        $response->assertJsonStructure([
            'data' => [
                '*' => ['name', 'price', 'category', 'creationDate', 'lastUpdated'],
            ],
        ]);
    }
}
