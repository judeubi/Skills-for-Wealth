<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Admin, Post, Course};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VolunteerController extends Controller
{
    //
   
    
    public function register(){
        return view('volunteer.auth.register');
    }
    public function login(){
        return view('volunteer.auth.login');
    }
    public function create(Request $request){
        $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:admins',
            'phone' => 'required|min:11|max:15',
            'address' => 'required',
            'profile_photo' => 'required||mimes:jpg,png,jpeg|max:1999',
            'password' => 'required|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);
        // dd($form_data);
        $profile_photo = $request->file('profile_photo')->store('public/users');
        $student = new Admin();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->profile_photo = $profile_photo;
        $student->password = Hash::make($request->password);
        $user = $student->save();
        return redirect()->route('admin.login')->with('success', 'Volunteer created successfully');
    }

    public function check(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if(Auth::guard('admin')->attempt($credentials)){
             $request->session()->regenerateToken();
            // $request->session()->put('name', Auth::guard('admin')->firstname);
            return redirect()->route('volunteer.dashboard')->with('success', 'Volunteer Logged in');
        }
        return back()->withErrors(['error' => 'Invalid Username/Password!']);
    }
    public function dashboard(){
       
        return view('volunteer.pages.dashboard');
        
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function edit(){
        return view('volunteer.auth.edit');
    }
    public function volunteer_update(Request $request ,$id){
        $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:admins',
            'phone' => 'required|min:11|max:15',
            'address' => 'required',
            'profile_photo' => 'required||mimes:jpg,png,jpeg|max:1999',
            'password' => 'required|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);

        $profile_photo = $request->file('profile_photo')->store('public/users');
        $volunteer = Admin::find($id);
        $volunteer->firstname = $request->firstname;
        $volunteer->lastname = $request->lastname;
        $volunteer->email = $request->email;
        $volunteer->phone = $request->phone;
        $volunteer->address = $request->address;
        $volunteer->profile_photo = $profile_photo;
        $volunteer->password = Hash::make($request->password);
        $volunteer->update();
        return redirect()->route('volunteer.dashboard')->with('success', 'Volunteer Updated Successfully');
    }
    // public function addCourse(){
    //     return view('admin.addcourse');
    // }
    // public function add_course(Request $request){
    //     $form_data = $request->validate([
    //         'course' => 'required'
    //     ]);
    //     $course = new Course();
    //     $course->name = $request->course;
    //     $course->save();
    //     return redirect()->route('volunteer.dashboard')->with('success', 'Course successfully add');
    // }
    public function add_course(Request $request){
        $form_data = $request->validate([
            'course' => 'required'
        ]);
        $course = new Course();
        $course->name = $request->course;
        $course->save();
        return redirect()->route('volunteer.dashboard')->with('success', 'Course successfully added');
    }
    public function post(){
        $courses = Course::all();
        return view('volunteer.Uploads.post', compact('courses'));
    }
    public function create_post(Request $request){
        $form_data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'file' => 'required|mimes:pdf,jpg,svg,txt,png,jpeg,'
        ]);

        $file = $request->file('file')->store('public/posts');
        $Post = new Post();
        $Post->title = $request->title;
        $Post->body = $request->body;
        $Post->file = $file;
        $Post->course_id = $request->course_id;
        $Post->save();
        return redirect()->route('volunteer.dashboard')->with('success', 'Post Created Successfully');
    }
    public function message(){
        return view('volunteer.auth.message');
    }
}
