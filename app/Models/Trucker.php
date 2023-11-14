<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'phone_number', 'truck_number', 'trailer_number', 'comment'];
}
