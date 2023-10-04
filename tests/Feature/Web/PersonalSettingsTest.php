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



    public function test_correct_loading_of_dashboard_view()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
    }

    public function test_incorrect_loading_of_dashboard_view()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(302)
            ->assertRedirectToRoute('login');
    }

    public function test_change_language()
    {
        $locale = 'es'; // El idioma al que deseas cambiar

        // Llama al método setLang a través de una solicitud HTTP
        $response = $this->get("locale/$locale");

        // Verifica que la respuesta sea una redirección
        $response->assertRedirect();
    }
}
