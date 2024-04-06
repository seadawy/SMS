<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Student extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    protected $primaryKey ="studentId";
    protected $fillable=[
        'studentName',
        'email',
        'phone',
        'classId',
        'parentId',
        'isActive',
        'profileAvatar',
        'password'
    ];
}
