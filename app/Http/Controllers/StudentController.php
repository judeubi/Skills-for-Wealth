<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,Post,Course};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function Mycourse(){
        $posts = Post::where('course_id',Auth::user()->course_id)->orderBy('created_at', 'desc')->paginate(10);


         return view('student.pages.mycourse', compact('posts'));
    }
    public function baking(){
        // $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('student.pages.baking');
    }
    public function tailor(){
        // $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('student.pages.tailoring');
    }

    public function register(){
        $courses = Course::all();
        return view('student.auth.register', compact('courses'));
    }
    public function create(Request $request){
        $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:11|max:15',
            'address' => 'required',
            'profile_photo' => 'required||mimes:jpg,png,jpeg|max:1999',
            'password' => 'required|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);
    // dd($form_data);
        $profile_photo = $request->file('profile_photo')->store('public/users');
        $student = new User();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->profile_photo = $profile_photo;
        $student->password = Hash::make($request->password);
        $student->course_id = $request->course_id;
        $user = $student->save();
        return to_route('student.login')->with('success', 'Student created successfully');
    }
    public function login(){
        return view('student.auth.login');
    }
    public function check(Request $request){
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:4'
            ]);
            if(auth()->attempt($credentials)){
                if(auth()->user()->is_admin == 1){
                    $request->session()->regenerateToken();
                    return redirect()->route('admin.dashboard');
                }
            $request->session()->regenerateToken();
           
            return redirect()->route('student.dashboard')->with('success', 'Student Logged in');
        }
        return back()->withErrors(['error' => 'Invalid Username/Password!']);
    }
    public function dashboard(){
        //$student = User::find($id);
        return view('student.pages.dashboard');
        
    }
    public function edit(){
        return view('student.auth.edit');
    }
    public function student_update(Request $request ,$id){
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
        $student = Student::find($id);
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->profile_photo = $profile_photo;
        $student->password = Hash::make($request->password);
        $student->update();
        return redirect()->route('student.dashboard')->with('success', 'Student Updated Successfully');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
