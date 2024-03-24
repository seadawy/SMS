<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\classes;
use App\Models\Parents;
use App\Models\Staff;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Studentcontroller extends Controller
{
    public function index()
    {
        $data = DB::table('students')
            ->join('parents', 'parents.parentId', '=', 'students.parentId')
            ->join('classes', 'classes.classId', '=', 'students.classId')
            ->select('students.*', 'classes.title', 'parents.fullName')
            ->get();
        //dd($data);
        return view('staff.manager.student.show', ['data' => $data]);
    }
    public function create()
    {
        $classes = classes::get();
        $parent = Parents::get();
        return view('staff.manager.student.create', ['classes' => $classes, 'parents' => $parent]);
    }
    public function store(Request $re)
    {
        $val = $re->validate([
            'studentName' => 'required',
            'email' => 'required|unique:Staff',
            'phone' => 'required|min:11',
            'password' => 'required|min:6',
            'classId' => 'required',
            'parentId' => 'required',
            'isActive' => 'required'
        ]);
        //dd($val);
        $val['profileAvatar'] = 'im';
        $val['password'] = Hash::make($val['password']);
        $newman = Student::create($val);
        User::create(['userId' => $newman->userId, 'role' => 'student']);
        return redirect()->route('student');
    }
    public function edit($userId)
    {
        $data = Student::where('studentId', '=', $userId)->first();
        $classes = classes::get();
        $parent = Parents::get();
        return view('staff.manager.student.create', ['student' => $data, 'classes' => $classes, 'parents' => $parent]);
    }
    public function update($id, Request $re)
    {
        $val = $re->validate([
            'studentName' => 'required',
            'email' => 'required|unique:Staff',
            'phone' => 'required|min:11',
            'classId' => 'required',
            'parentId' => 'required',
            'isActive' => 'required'
        ]);
        $val['profileAvatar'] = 'im';
        Student::where('studentId', '=', $id)->update($val);
        return redirect()->route('student');
    }
    public function destroy($id)
    {
        Student::where('studentId', '=', $id)->delete();
        return redirect()->route('student');
    }
}
