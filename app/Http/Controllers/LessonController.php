<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Staff;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function indexAll()
    {
        $data = Lesson::all();
        return view('staff.lesson.manage', ['lessons' => $data]);
    }

    public function index($id)
    {
        $data = Lesson::where('courseId', $id)->get();
        return view('staff.lesson.manage', ['lessons' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$courses = Course::where('createdBy', current user);
        $courses = Course::all();
        return view('staff.lesson.form', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'lessonTitle' => 'required',
            'courseId' => 'required'
        ]);
        $validated['createdBy'] = 1;
        Lesson::create($validated);
        return redirect()->route('StaffLesson');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('staff.lesson.form');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
