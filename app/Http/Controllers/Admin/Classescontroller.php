<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\classes;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Classescontroller extends Controller
{
    public function index()
    {
        $data = DB::table('classes')->join('staff', 'staff.userId', '=', 'classes.createdBy')->select('staff.*', 'classes.*')->get();
        //dd($data);
        return view('staff.manager.class.show', ['data' => $data]);
    }
    public function create()
    {
        return view('staff.manager.class.create');
    }
    // dont forget th created by
    public function store(Request $re)
    {
        $val = $re->validate([
            'title' => 'required',
        ]);
        $val['createdBy'] = Auth::user()->userId;
        classes::create($val);
        return redirect()->route('classes');
    }
    public function edit($userId)
    {
        $data = classes::where('classId', '=', $userId)->first();
        return view('staff.manager.class.create', ['classes' => $data]);
    }
    public function update($id, Request $re)
    {
        $val = $re->validate([
            'title' => 'required',
        ]);
        classes::where('classId', '=', $id)->update($val);
        return redirect()->route('classes');
    }
    public function destroy($id)
    {
        classes::where('classId', '=', $id)->delete();
        return redirect()->route('classes');
    }
}
