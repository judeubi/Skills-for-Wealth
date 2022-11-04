<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class addcoursecontroller extends Controller
{
    //
    public function addCourse(){
        return view('admin.addcourse');
    }
    public function add_course(Request $request){
        $form_data = $request->validate([
            'course' => 'required'
        ]);
        $course = new Course();
        $course->name = $request->course;
        $course->save();
        return redirect()->route('admin.dashboard')->with('success', 'Course successfully add');
    }
}
