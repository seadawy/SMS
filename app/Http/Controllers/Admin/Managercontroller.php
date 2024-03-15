<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class Managercontroller extends Controller
{
    public function index(){
        $data = Staff::where('role','=','admin');
        return view('staff.Manager.Manager',['data'=>$data]);
    }
}
