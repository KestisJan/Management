<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Registration form
    public function create()
    {
        return view('users.create');
    }

    // Create New User
    public function store(Request $request)
    {   
        // Validation
        $forms = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash password
        $forms['password'] = bcrypt($forms['password']);

        // Create User
        $user = User::create($forms);

        // Login
        auth()->login($user);

        return redirect('/');
    }

    public function logout(Request $request)
    {
        // Logouts current user
        auth()->logout();
        // Invalidates users session
        $request->session()->invalidate();
        // Regenerate the session token for the current session
        $request->session()->regenerate();

        return redirect('/');
    }

    // Log IN
    public function login() 
    {
        return view('users.login');
    }
    // Authenticate User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back();
    }
}
