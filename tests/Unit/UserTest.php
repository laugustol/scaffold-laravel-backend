<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    
    public function register()
    {
        $response = $this->post('/api/register',[
                                                    "name" => "Admin",
                                                    "email" => "admin@admin.com",
                                                    "password" => "12345678",
                                                    "password_confirmation" => "12345678"
                                                ]);

        $response->assertStatus(200);
    }
}
