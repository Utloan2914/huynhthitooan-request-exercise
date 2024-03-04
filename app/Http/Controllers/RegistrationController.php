<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }
    public function registration(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');
        return view('result', [
            'name' => $name,
            'username' => $username,
            'password' => $password,
        ]);
    }
}


