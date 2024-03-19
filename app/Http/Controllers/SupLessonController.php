<?php

namespace App\Http\Controllers;

use App\Models\SupLesson;
use Illuminate\Http\Request;

class SupLessonController extends Controller
{
    public function index($id)
    {
        $data = SupLesson::findMany($id);
        return json_encode($data);
    }
}
