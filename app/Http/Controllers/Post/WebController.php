<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Web;

class WebController extends Controller
{
    //
    public function webDev(){
        return view('volunteer.pages.web');
    }
   
   
    public function post_web(Request $request){
        $form_data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf,jpg,svg,txt,png,jpeg,'
        ]);

        $file = $request->file('file')->store('public/posts');
        $WebPost = new Web();
        $WebPost->title = $request->title;
        $WebPost->description = $request->description;
        $WebPost->file = $file;
        $WebPost = $WebPost->save();
        return redirect()->route('volunteer.dashboard')->with('success', 'Post Created Successfully');
    }
    public function web_edit($id){
        $webpost = Web::find($id);
        
        return view('volunteer.edit.web');
    }
    public function update(Request $request ,$id){
       
        $form_data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf,jpg,svg,txt,png,jpeg,'
        ]);
        //dd($form_data);
        $file = $request->file('file')->store('public/post');
        $WebPost =Web::find($id);
        $WebPost->title = $request->title;
        $WebPost->description = $request->description;
        $WebPost->file = $file;
        $WebPost->update();
        return redirect()->route('volunteer.dashboard')->with('success', 'Post Updated Successfully');
    }
    public function destroy($id){
        $WebPost = Web::find($id);
        $WebPost->delete();

        return redirect()->route('volunteer.dashboard')->with('success',  'Post Deleted Successfully');
    }
}
