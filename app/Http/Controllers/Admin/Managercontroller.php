<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class Managercontroller extends Controller
{
    public function dashboard()
    {
        return view('staff.manager.dashboard');
    }
    public function index()
    {
        $data = Staff::where('role', '=', 'admin')->get();
        return view('staff.manager.manager.Manager', ['data' => $data]);
    }
    public function create()
    {
        return view('staff.manager.manager.create');
    }
    public function store(Request $re)
    {
        $val = $re->validate([
            'name' => 'required',
            'email' => 'required|unique:Staff',
            'password' => 'required|min:6',
        ]);
        $val['role'] = 'admin';
        Staff::create($val);
        return redirect()->route('manager');
    }
    public function edit($userId)
    {
        $data = Staff::where('userId', '=', $userId)->first();
        return view('staff.manager.manager.edit', ['data' => $data]);
    }
    public function update($id, Request $re)
    {
        $val = $re->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $val['created_at'] = $re->created_at;
        Staff::where('userId', '=', $id)->update($val);
        return redirect()->route('manager');
    }
    public function destroy($id)
    {
        Staff::where('userId', '=', $id)->delete();
        return redirect()->route('manager');
    }
}
