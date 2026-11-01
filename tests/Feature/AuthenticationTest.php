<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_and_registration_forms_are_available(): void
    {
        $this->get('/register')->assertOk()->assertSee('Buat akun');
        $this->get('/login')->assertOk()->assertSee('Selamat datang kembali');
    }

    public function test_user_can_register_without_email_verification(): void
    {
        $response = $this->post('/register', [
            'name' => 'Warga Kota',
            'email' => 'warga@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'name' => 'Warga Kota',
            'email' => 'warga@example.com',
            'email_verified_at' => null,
        ]);
    }

    public function test_user_can_login_and_logout_with_session(): void
    {
        $user = User::factory()->create([
            'password' => 'password123',
        ]);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password123',
        ])->assertRedirect('/dashboard');

        $this->assertAuthenticatedAs($user);

        $this->post('/logout')->assertRedirect('/login');
        $this->assertGuest();
    }

    public function test_guest_cannot_open_dashboard(): void
    {
        $this->get('/dashboard')->assertRedirect('/login');
    }

    public function test_login_rejects_invalid_credentials(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password-salah',
        ])->assertSessionHasErrors('email');

        $this->assertGuest();
    }
}
