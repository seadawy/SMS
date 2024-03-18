<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupLesson extends Model
{
    use HasFactory;
    protected $table = 'sup_lessons';
    protected $primaryKey = 'supLessonId';
}
