<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'users' => User::all()
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user) {

        // Validation

        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'role' => ['required'],
        ]);

        $user->update($formFields);

        return redirect('/admin');
    }

}
