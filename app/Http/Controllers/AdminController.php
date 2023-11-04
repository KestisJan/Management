<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

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
            'role' => ['required', 'in:admin,user,editor'],
        ]);

        $user->update($formFields);

        return redirect('/admin');
    }

    public function assignRole($userId, $roleName)
    {
        $user = UserRoles::find($userId);
        $role = Role::where('name', $roleName)->first();

        if ($user && $role) {
            $user->assignRole($role);
            return redirect('/');
        } else {
            return abort(404);
        }
    }

}
