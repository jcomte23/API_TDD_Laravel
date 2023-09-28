<?php

namespace Tests\Feature\Web;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonalSettingsTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_correct_loading_of_welcome_view()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_correct_loading_of_dashboard_view()
    {
        $user=User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard'); 
        $response->assertStatus(200);
    }

    public function test_it_redirects_unauthenticated_users_to_login()
    {
        $response = $this->get('/dashboard'); 
        
        $response->assertStatus(302)
            ->assertRedirectToRoute('login');
    }
}
