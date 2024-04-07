<?php

namespace App\Http\Controllers;

use App\Mail\forgitpassword;
use App\Models\Parents;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class Authcontroller extends Controller
{
    public function  login(){
        return view('auth.login');
    }
    public function Authlogin(Request $request){
        // dd($request);
        $val = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
            'role'=>'required',
        ]);
        $credentials = $request->only('email', 'password');
        if($request->role == 'admin' || $request->role == 'teacher'){
            if (Auth::guard('staff')->attempt($credentials)) {
                $request->session()->regenerate();
                $user = User::where('userId','=',Auth::guard('staff')->user()['userId'])->first();
                if($user->role == 'admin'){
                   // dd(Auth::guard('staff'));
                    return redirect()->route('manager.dashboard');
                } else{
                    return redirect()->route('teacher.dashboard');
                }
            }else{
                return redirect()->back()->with(['email'=>'wrong email']);
            }
        }else if($request->role == 'student'){
            if (Auth::guard('student')->attempt($credentials)) {
                return 'student';
            }else{
                return redirect()->back()->with(['email'=>'wrong email']);
            }
        }else if($request->role == 'parent'){
            if (Auth::guard('parent')->attempt($credentials)) {
                return 'parent';
            }else{
                return redirect()->back()->with(['email'=>'wrong email']);
            }
        }else{
            return redirect()->back()->with(['email'=>'wrong email']);
        }
    }
    public function logout(){
        dd(Auth::guard('staff'));
        Auth::guard('staff')->logout();
        return redirect()->route('login');
    }
    public function forgetpassword(){
        return view('forgetpassword');
    }
    public function forgetpass(Request $request){
        $data = User::where('email','=',$request->email)->first();
        if(!empty($data)){
            Mail::to($data->email)->send(new forgitpassword($data));
            return redirect()->back()->with('Success','Reset password');
        }else{
            return redirect()->back()->with('error','email not found');
        }
    }
    public function resetpassword($id){
        return view('resetpassword',['id'=>$id]);
    }
    public function resetpass(Request $request,$id){
        $val = $request->validate([
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);
        User::find($id)->Update(['password'=>$request->password]);
        return redirect()->route('login');
    }
    public function forgetpassword(){
        return view('forgetpassword');
    }
    public function forgetpass(Request $request){
        if(Staff::where('email','=',$request->email)->first()){
            $data = Staff::where('email','=',$request->email)->first();
            $data->id = $data->userId;
        }else  if(Student::where('email','=',$request->email)->first()){
            $data = Student::where('email','=',$request->email)->first();
            $data->id = $data->studentId;
        }else  if(Parents::where('email','=',$request->email)->first()){
            $data = Parents::where('email','=',$request->email)->first();
            $data->id = $data->parentId;
        }
        if(!empty($data)){
            Mail::to($data->email)->send(new forgitpassword($data));
            return redirect()->back()->with('Success','Reset password');
        }else{
            return redirect()->back()->with('error','email not found');
        }
    }
    public function resetpassword($id){
        return view('resetpassword',['id'=>$id]);
    }
    public function resetpass(Request $request,$id){
        $val = $request->validate([
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);
        if(Staff::where('userId','=',$id)->first()){
            $data = Staff::where('userId','=',$id)->Update(['password'=>$request->password]);
        }else  if(Student::where('studentId','=',$id)->first()){
            $data = Student::where('studentId','=',$id)->Update(['password'=>$request->password]);
        }else  if(Parents::where('parentId','=',$id)->first()){
            $data = Parents::where('parentId','=',$id)->Update(['password'=>$request->password]);
        }
        return redirect()->route('login');
    }

}
