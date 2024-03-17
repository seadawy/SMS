<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $primaryKey = 'lessonId';

    public function CreatedBy()
    {
        return $this->belongsTo(Staff::class, 'createdBy', 'userId');
    }
}
