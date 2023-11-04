<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

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
        ]);
    }

    public function updateRole(Request $request, $userId)
    {
       $request->validate([
        'new_role' => 'required|in:admin,user,editor',
       ]);
       
       
       $user = User::find($userId);
       
       if ($user) 
       {
            $newRole = $request->input('new_role');
            $user->assignRole($newRole);
            
            return redirect('/admin');
       } else 
       {
            return abort(404);
       }
    }

}
