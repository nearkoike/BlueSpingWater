<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function register(RegisterRequest $request) {
        User::create($request->all());
        return redirect('login');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {

            return redirect('/');
        }

        return Redirect::back()->withErrors(['error' => 'Invalid Credentials']);
    }
}
