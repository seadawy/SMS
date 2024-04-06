<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
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
}
