<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function handleLogin(LoginRequest $request)
    {


        /*$request->validate([
            // Validation rules
            'username' => ['required', 'alpha', 'min:6', 'max:12'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ], [
            // Error messages
            'username.required' => 'Username is required',
            'username.alpha' => 'Username should only contain letters',
            'email.email' => 'Hello this is not a email',
        ]);*/
        return $request;
    }
}
