<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    function showSignup()
    {
        return view('auth.signup');
    }

    function handleSignup()
    {
        $formFields = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' => 'required'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/');
    }

    function showLogin()
    {
        return view('auth.login');
    }

    function handleLogin()
    {
        $formFields = request()->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            request()->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors(['email', 'Invalid Email or Password']);
    }
}
