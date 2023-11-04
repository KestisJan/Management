<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserRoles extends Authenticatable
{
    use HasFactory;

    public function getRoles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
}
