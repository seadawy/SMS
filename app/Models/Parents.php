<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Parents extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    protected $primaryKey ="parentId";
    protected $fillable = [
        'fullName',
        'email',
        'phone',
        'address',
        'password',
        'isActive'
    ];
}
