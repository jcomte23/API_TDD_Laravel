<?php

namespace Tests\Feature\Api\V1\Product;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    private string $url = "api/v1/products";

    public function test_index_method_lists_the_products()
    {
        Product::factory(5)->create();
        $response = $this->getJson($this->url);
        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonCount(5);
        $response->assertJsonStructure([
            '*' => ['id', 'name', 'price', 'category']
        ]);
    }

    public function test_store_method_saves_a_product()
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

    public function test_show_method_displays_a_product()
    {
        $product = Product::factory()->create();

        $response = $this->getJson("{$this->url}/{$product->id}");
        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonStructure([
            'name',
            'price',
            'category',
            'created_at',
            'updated_at'
        ]);
    }

    public function test_update_method_updates_a_product()
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

    public function test_destroy_method_eliminates_a_product()
    {
        $product = Product::factory()->create();

        $response = $this->deleteJson("{$this->url}/{$product->id}");
        $response->assertNoContent();

        $this->assertFalse(Product::where('id', $product->id)->exists());
    }
}
