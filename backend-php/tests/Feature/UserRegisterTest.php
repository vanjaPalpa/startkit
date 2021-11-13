<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class UserRegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_route_register_exist()
    {
        $response = $this->post('api/register');

        $response->assertStatus(200);
    }
    public function test_post_username_mail_password_exist(){
        $response = $this->post('api/users',[
            'name' => 'user',
            'email' =>'user@mail.com',
            'password' => '12345678'
        ]);
        $response->assertOk();
        $this->assertCount(1,User::all());

    }
}
