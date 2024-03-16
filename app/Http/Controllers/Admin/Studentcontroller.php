<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Studentcontroller extends Controller
{
    public function index(){
        $data;
        return view('staff.manager.teacher.show',['data'=>$data]);
    }
    public function create(){
        return view('staff.manager.teacher.create');
    }
    public function store(Request $re){
        $val = $re->validate([
            'name'=>'required',
            'email'=>'required|unique:Staff',
            'password'=>'required|min:6'
        ]);
        $newman = Staff::create($val);
        User::create(['userId'=>$newman->id , 'role'=>'teacher']);
        return redirect()->route('teacher');
    }
    public function edit($userId){
        $data = Staff::where('userId','=',$userId)->first();
        return view('staff.manager.teacher.create',['teacher'=>$data]);
    }
    public function update($id ,Request $re){
        $val = $re->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
        Staff::where('userId','=',$id)->update($val);
        return redirect()->route('teacher');
    }
    public function destroy($id){
        Staff::where('userId','=',$id)->delete();
        return redirect()->route('teacher');
    }
}
