<?php

namespace Tests\Feature\Web;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function test_correct_loading_of_welcome_view()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_correct_loading_of_product_guest_view()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }
}
