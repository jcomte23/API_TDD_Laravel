<?php

namespace Tests\Feature\Api\V1\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    private string $url="api/v1/login";

    /** @test */
    public function it_can_login_with_valid_credentials()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123'), // Hashed password
        ]);

        $response = $this->post($this->url, [
            'email' => 'test@example.com',
            'password' => 'password123',
            'deviceName' => 'test_device',
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'status' => 'Success',
            ])
            ->assertJsonStructure([
                'message',
                'token',
                'status',
            ]);
    }

    /** @test */
    public function it_returns_unauthorized_with_invalid_password()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123'), // Hashed password
        ]);

        $response = $this->post($this->url, [
            'email' => 'test@example.com',
            'password' => 'wrongpassword',
            'deviceName' => 'test_device',
        ]);

        $response->assertStatus(401)
            ->assertJson([
                'status' => 'Unauthorized',
            ])
            ->assertJsonStructure([
                'message',
                'status',
            ]);
    }

    /** @test */
    public function it_returns_not_found_with_non_existing_email()
    {
        $response = $this->post($this->url, [
            'email' => 'nonexistent@example.com',
            'password' => 'password123',
            'deviceName' => 'test_device',
        ]);

        $response->assertStatus(404)
            ->assertJson([
                'status' => 'not_found',
            ])
            ->assertJsonStructure([
                'message',
                'status',
            ]);
    }
}
