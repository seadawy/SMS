<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function class ()
    {
        return $this->belongsTo(ClassModel::class, 'inClass', 'classId');
    }

    public function categoryF()
    {
        return $this->belongsTo(Category::class, 'category', 'categoryId');
    }

    public function teacher()
    {
        return $this->belongsTo(Staff::class, 'createdBy', 'userId');
    }
    protected $primaryKey = 'courseId';
    protected $fillable = [
        'title',
        'category',
        'price',
        'inClass',
        'createdBy',
    ];

}
