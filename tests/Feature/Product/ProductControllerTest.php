<?php

namespace Tests\Feature\Product;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        Product::factory(5)->create();
        $response = $this->getJson('api/products');
        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonCount(5);
    }

    public function test_store()
    {
        $productData = [
            'name' => 'new product',
            'price' => 19.99,
        ];

        $response = $this->postJson('api/products', $productData);

        $response->assertCreated();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonFragment($productData);

        // Verifica que el producto se haya almacenado en la base de datos si es necesario.
        $this->assertDatabaseHas('products', $productData);
    }

    public function test_show()
    {
        $product = Product::factory()->create();

        $response = $this->getJson("api/products/{$product->id}");
        
        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJson($product->toArray());
    }

    public function test_update()
    {
        $product = Product::factory()->create();

        $updatedData = [
            'name' => 'Producto Actualizado',
            'price' => 29.99,
        ];

        $response = $this->putJson("api/products/{$product->id}", $updatedData);

        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonFragment($updatedData);

        // Verifica que el producto se haya actualizado en la base de datos si es necesario.
        $this->assertDatabaseHas('products', $updatedData);
    }

    public function test_destroy()
    {
        $product = Product::factory()->create();

        $response = $this->deleteJson("api/products/{$product->id}");

        $response->assertNoContent();

        // Verifica que el producto se haya eliminado de la base de datos si es necesario.
        $this->assertFalse(Product::where('id', $product->id)->exists());
    }
}
