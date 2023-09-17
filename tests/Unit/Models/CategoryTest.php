<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_has_many_products()
    {
        $category=new Category();
        $this->assertInstanceOf(Collection::class,$category->products);
    }
}
