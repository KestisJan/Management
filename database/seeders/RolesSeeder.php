<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default = Role::create(['name' => 'default']);
        $admin = Role::create(['name' => 'admin']);

        $manage_users_permission = Permission::create(['name' => 'manage users']);
        $create_tool_permission = Permission::create(['name' => 'assign-roles']);

        $permissions = [
            $manage_users_permission,
            $create_tool_permission
        ];

        $admin->syncPermissions($permissions);
    }
}
