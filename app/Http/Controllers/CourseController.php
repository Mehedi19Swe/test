<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
public function index(){
    $courses= Course::latest()->get();
    return view('index',compact('courses'));
}

    public function store(Request $request){
        $request->validate([
            'course'=>'required',
            'category'=>'required',
            'level'=>'required',

        ],[
            'course.required'=>'please input your course',
            'category.required'=>'please input your category',
            'level.required'=>'please input your level',
        ]);
        Course::insert([
            'course'=>$request->course,
            'category'=>$request->category,
            'level'=>$request->level,
        ]);

        return redirect()->back()->with('success','Successfully Data added');
    }

    public function edit($id){
      $course= Course::findOrFail($id);
      return view('edit',compact('course'));

    }

    public function update(Request $request,$id){

        Course::findOrFail($id)->update([
            'course'=>$request->course,
            'category'=>$request->category,
            'level'=>$request->level,
        ]);

        return redirect()->to('/')->with('success','Successfully Data updated');

    }

    public function destroy($id){
        Course::findOrfail($id)->delete();
        return redirect()->back()->with('delete','Successfully Data deleted');


    }
}
