<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;

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

    public function changeRoles(User $user)
    {
       
        return view('admin.change-roles', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    public function assignRole(Request $request, $userId)
    {
        $user = User::find($userId);
        $assignRolesPermission = Permission::findByName('assign-roles');

        if ($user->hasPermissionTo('assign-roles')) {
            $newRole = $request->input('new_role');
            $user->assignRole($newRole);
            return redirect('/admin');
        } else {
            return abort(403);
        }
    }

}
