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

    private string $url="api/v1/products";

    public function test_index()
    {
        Sanctum::actingAs(
            User::factory()->create()
        );
        Product::factory(5)->create();
        $response = $this->getJson($this->url);
        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonCount(5);
    }

    public function test_store()
    {
        Sanctum::actingAs(
            User::factory()->create()
        );
        $productData = [
            'name' => 'new product',
            'price' => 19.99,
        ];

        $response = $this->postJson($this->url, $productData);

        $response->assertCreated();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonFragment($productData);

        // Verifica que el producto se haya almacenado en la base de datos si es necesario.
        $this->assertDatabaseHas('products', $productData);
    }

    public function test_show()
    {
        Sanctum::actingAs(
            User::factory()->create()
        );
        $product = Product::factory()->create();

        $response = $this->getJson("{$this->url}/{$product->id}");
        
        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonStructure([
            'data' => [
                'name',
                'price',
                'creationDate',
                'lastUpdated'
            ],
        ]);
    }

    public function test_update()
    {
        Sanctum::actingAs(
            User::factory()->create()
        );
        $product = Product::factory()->create();

        $updatedData = [
            'name' => 'Producto Actualizado',
            'price' => 29.99,
        ];

        $response = $this->putJson("{$this->url}/{$product->id}", $updatedData);

        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonFragment($updatedData);

        // Verifica que el producto se haya actualizado en la base de datos si es necesario.
        $this->assertDatabaseHas('products', $updatedData);
    }

    public function test_destroy()
    {
        Sanctum::actingAs(
            User::factory()->create()
        );
        $product = Product::factory()->create();

        $response = $this->deleteJson("{$this->url}/{$product->id}");

        $response->assertNoContent();

        // Verifica que el producto se haya eliminado de la base de datos si es necesario.
        $this->assertFalse(Product::where('id', $product->id)->exists());
    }
}
