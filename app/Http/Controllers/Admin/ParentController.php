<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ParentController extends Controller
{
    public function index()
    {
        $data = Parents::get();
        return view('staff.manager.parent.show', ['data' => $data]);
    }
    public function create()
    {
        return view('staff.manager.parent.create');
    }
    public function store(Request $re)
    {
        $val = $re->validate([
            'fullName' => 'required',
            'email' => 'required|unique:Staff',
            'phone' => 'required|min:11',
            'address' => 'required|string',
            'password' => 'required|min:6',
            'isActive' => 'required'
        ]);
        //dd($val);
        $val['password'] = Hash::make($val['password']);
        $newman = Parents::create($val);
        User::create(['userId' => $newman->userId, 'role' => 'parent']);
        return redirect()->route('parent');
    }
    public function edit($userId)
    {
        $data = Parents::where('parentId', '=', $userId)->first();
        return view('staff.manager.parent.create', ['parent' => $data]);
    }
    public function update($id, Request $re)
    {
        $val = $re->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'address' => 'required|string',
            'isActive' => 'required'
        ]);
        Parents::where('parentId', '=', $id)->update($val);
        return redirect()->route('parent');
    }
    public function destroy($id)
    {
        Parents::where('parentId', '=', $id)->delete();
        return redirect()->route('parent');
    }
}
