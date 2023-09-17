<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_belongs_to_category()
    {
        $product=Product::factory()->create();
        $this->assertInstanceOf(Category::class,$product->category);
    }
}
