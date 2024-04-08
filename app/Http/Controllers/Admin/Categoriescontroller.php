<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Categoriescontroller extends Controller
{
    public function index(){
        $data = DB::table('categories')
            ->join('staff', 'staff.userId', '=', 'categories.createdBy')
            ->select('staff.*','categories.*')
            ->get();
        //dd($data);
        return view('staff.manager.category.show',['data'=>$data]);
    }
    public function create(){
        return view('staff.manager.category.create');
    }
    // dont forget th created by
    public function store(Request $re){
        $val = $re->validate([
            'title'=>'required',
        ]);
        $val['createdBy']=Auth::user()->userId;
        Category::create($val);
        return redirect()->route('category');
    }
    public function edit($userId){
        $data = Category::where('categoryId','=',$userId)->first();
        return view('staff.manager.category.create',['category'=>$data]);
    }
    public function update($id ,Request $re){
        $val = $re->validate([
            'title'=>'required',
        ]);
        Category::where('categoryId','=',$id)->update($val);
        return redirect()->route('category');
    }
    public function destroy($id){
        Category::where('categoryId','=',$id)->delete();
        return redirect()->route('category');
    }
}
