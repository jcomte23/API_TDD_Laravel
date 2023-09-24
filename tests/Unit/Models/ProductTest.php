<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_product_belongs_to_category()
    {
        $product = Product::factory()->create();
        $this->assertInstanceOf(Category::class, $product->category);
    }

    public function test_it_lists_the_first_1000_products_with_category_id_not_null()
    {
        // Crear 15 productos, 10 con category_id y 5 sin category_id
        Product::factory(10)->create(['category_id' => 1]);
        Product::factory(5)->create(['category_id' => null]);

        // Usar el scope para obtener los primeros 10 productos con category_id
        $productos = Product::listTheFirst1000Products()->get();

        // Asegurarse de que se devuelvan solo 10 productos con category_id
        $this->assertCount(10, $productos);

        // Asegurarse de que todos los productos tengan category_id
        $this->assertTrue($productos->every(fn ($producto) => $producto->category_id !== null));
    }
}
