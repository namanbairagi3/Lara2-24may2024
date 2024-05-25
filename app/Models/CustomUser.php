<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomUser extends Model
{
    // 1. Properties
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    use HasFactory;
    // 2. Construct

    // 3.Methods
}
