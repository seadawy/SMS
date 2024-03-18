<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $primaryKey = 'lessonId';
    protected $fillable = [
        'lessonTitle',
        'createdBy',
        'courseId',
    ];

    public function CreatedBy()
    {
        return $this->belongsTo(Staff::class, 'createdBy', 'userId');
    }
    public function AtCourse()
    {
        return $this->belongsTo(Course::class, 'courseId', 'courseId');
    }

    public function SupLessons()
    {
        return $this->hasMany(SupLesson::class, 'lessonId', 'lessonId');
    }
}
