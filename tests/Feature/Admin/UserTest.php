<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_page()
    {
        $response = $this->get('/login');

        $response->assertSeeText("Sign In");
        $response->assertSeeText("Username");
        $response->assertSeeText("Password");
        $response->assertSeeText("Login");
        $response->assertSeeText("Register");

        $response->assertStatus(200);
    }

    public function test_users_table()
    {
        $this->assertDatabaseHas('users', [
            'username' => 'admin2'
        ]);
    }
}
