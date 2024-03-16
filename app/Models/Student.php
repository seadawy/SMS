<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
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
