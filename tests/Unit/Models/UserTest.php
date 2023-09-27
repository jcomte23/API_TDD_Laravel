<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_sets_email_attribute_to_lowercase()
    {
        // Crear un usuario con un correo electrónico en mayúsculas
        $usuario = User::factory()->create([
            'email' => 'CORREO@EXAMPLE.COM',
        ]);

        // Verificar que el correo electrónico se haya establecido en minúsculas
        $this->assertEquals('correo@example.com', $usuario->email);
    }
}
