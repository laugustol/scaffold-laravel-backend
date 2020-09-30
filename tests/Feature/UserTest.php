<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{    
    /*public function register()
    {
        $response = $this->post('/api/register',[
                                                    "name" => "Admin",
                                                    "email" => "admin@admin.com",
                                                    "password" => "12345678",
                                                    "password_confirmation" => "12345678",
                                                ]);

        $response->assertStatus(200);
    }*/
    /** @test */
    public function login()
    {
        $user = factory(User::class)->create([
            "email" => "admin@admin.com",
            'password' => bcrypt($password = '12345678'),
        ]);
        $response = $this->post('/api/login',[
                                                "email" => "admin@admin.com",
                                                "password" => bcrypt($password = '12345678'),
                                            ]);

        $response->assertStatus(200);
    }
}
