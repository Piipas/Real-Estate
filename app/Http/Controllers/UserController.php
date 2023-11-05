<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function register() {
        return view('users.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            "name" => "required|max:40|min:5",
            "email" => ["required", "email", Rule::unique('users', 'email')],
            "password" => ["required", "confirmed", Password::min(8)->mixedCase()->symbols()->numbers()->letters()->uncompromised()]
        ]);

        $formFields["password "] = bcrypt($formFields["password"]);
        
        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'Account Created Successfuly, welcome in.');
    }

    public function login() {
        return view('users.login');
    }

    public function auth(Request $request) {
        $formFields = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('Welcome back!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials.'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth()->logout();
        
        $request->session()->regenerate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out, Come back soon.');
    }
}
