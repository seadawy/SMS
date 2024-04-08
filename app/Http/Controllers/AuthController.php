<?php

namespace App\Http\Controllers;

use App\Mail\forgitpassword;
use App\Models\Parents;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authincate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role['role'] == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('staff.dashboard');
            }
        }else if(Auth::guard('student')->attempt($credentials)){
            return view('student');
        }else if(Auth::guard('parent')->attempt($credentials)){
            return view('parent');
        }else {
            return "Wrong email";
        }

    }

    public function logout(Request $request)
    {
        if(Auth::user()){
            Auth::logout();
        }else if(Auth::guard('student')->user()){
            Auth::guard('student')->logout();
        }else if(Auth::guard('parent')->user()){
            Auth::guard('parent')->logout();
        }
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
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
