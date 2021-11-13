<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whoops\Run;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request){
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]
        );
    }
}
