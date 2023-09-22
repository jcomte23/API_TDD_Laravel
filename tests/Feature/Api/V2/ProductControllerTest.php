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

    public function test_it_can_create_a_product()
    {
        $productData = [
            'name' => 'new product',
            'price' => 200.99
        ];

        $response = $this->postJson($this->url, $productData);
        $response->assertCreated();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonFragment($productData);
        $this->assertDatabaseHas('products', $productData);
    }

    public function test_it_can_show_a_product()
    {
        $product = Product::factory()->create();

        $response = $this->getJson("{$this->url}/{$product->id}");
        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonStructure([
            'data' => [
                'name',
                'price',
                'category',
                'creationDate',
                'lastUpdated'
            ],
        ]);
    }

    public function test_it_can_update_a_product()
    {
        $product = Product::factory()->create();

        $updatedData = [
            'name' => 'Producto Actualizado',
            'price' => 29.99,
        ];

        $response = $this->putJson("{$this->url}/{$product->id}", $updatedData);
        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonFragment($updatedData);

        $this->assertDatabaseHas('products', $updatedData);
    }

    public function test_it_can_delete_a_product()
    {
        $product = Product::factory()->create();

        $response = $this->deleteJson("{$this->url}/{$product->id}");
        $response->assertNoContent();

        $this->assertFalse(Product::where('id', $product->id)->exists());
    }
}
