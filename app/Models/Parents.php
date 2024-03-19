<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Parents extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'email',
        'phone',
        'address',
        'password',
        'isActive'
    ];
}
