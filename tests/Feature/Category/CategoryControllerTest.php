<?php

namespace Tests\Feature\Category;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        Category::factory(5)->create();
        $response = $this->getJson('api/categories');
        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonCount(5);
    }

    public function test_store()
    {
        $categoryData = [
            'name' => 'new category',
        ];

        $response = $this->postJson('api/categories', $categoryData);

        $response->assertCreated();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonFragment($categoryData);

        // Verifica que el producto se haya almacenado en la base de datos si es necesario.
        $this->assertDatabaseHas('categories', $categoryData);
    }

    public function test_show()
    {
        $category = Category::factory()->create();

        $response = $this->getJson("api/categories/{$category->id}");
        
        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJson($category->toArray());
    }

    public function test_update()
    {
        $category = Category::factory()->create();

        $updatedData = [
            'name' => 'Producto Actualizado',
        ];

        $response = $this->putJson("api/categories/{$category->id}", $updatedData);

        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonFragment($updatedData);

        // Verifica que el producto se haya actualizado en la base de datos si es necesario.
        $this->assertDatabaseHas('categories', $updatedData);
    }

    public function test_destroy()
    {
        $category = Category::factory()->create();

        $response = $this->deleteJson("api/categories/{$category->id}");

        $response->assertNoContent();

        // Verifica que el producto se haya eliminado de la base de datos si es necesario.
        $this->assertFalse(Category::where('id', $category->id)->exists());
    }

}
