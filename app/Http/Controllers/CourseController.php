<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ClassModel;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Course::all();
        return view('staff.course.manage', ['courses' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catorgys = Category::all();
        $classes = ClassModel::all();
        return view('staff.course.form', ['categorys' => $catorgys, 'classes' => $classes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'inClass' => 'required',
            'category' => 'required',
        ]);
        $val['createdBy'] = Auth::id();
        Course::create($val);
        return redirect()->route('Staffcourse');
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
        $catorgys = Category::all();
        $classes = ClassModel::all();
        $course = Course::findOrFail($id);
        return view('staff.course.form', ['categorys' => $catorgys, 'classes' => $classes, 'course' => $course]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $val = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'inClass' => 'required',
            'category' => 'required',
            'createdBy' => 'required',
        ]);
        $item = Course::findOrFail($id);
        $item->update($val);
        return redirect()->route('Staffcourse');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect()->route('Staffcourse');
    }
}
