<?php

namespace App\Http\Controllers\Tailoring;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Tailoring;

class TailoringController extends Controller
{
    //
    public function tailor(){
        return view('volunteer.pages.tailoring');
    }
   
   
    public function tailoring_post(Request $request){
        $form_data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf,jpg,svg,txt,png,jpeg,'
        ]);

        $file = $request->file('file')->store('publics/posts');
        $TailoringPost = new Web();
        $TailoringPost->title = $request->title;
        $TailoringPost->description = $request->description;
        $TailoringPost->file = $file;
        $TailoringPost = $TailoringPost->save();
        return redirect()->route('volunteer.dashboard')->with('success', 'Post Created Successfully');
    }
    public function tailoring_edit($id){
        $tailoringpost = Tailoring::find($id);
        
        return view('volunteer.edit.taioring');
    }
    public function update(Request $request ,$id){
       
        $form_data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf,jpg,svg,txt,png,jpeg,'
        ]);
        //dd($form_data);
        $file = $request->file('file')->store('public/post');
        $TailoringPost = Tailoring::find($id);
        $TailoringPost->title = $request->title;
        $TailoringPost->description = $request->description;
        $TailoringPost->file = $file;
        $TailoringPost->update();
        return redirect()->route('volunteer.dashboard')->with('success', 'Tailoring Post Updated Successfully');
    }
    public function destroy($id){
        $TailoringPost = Tailoring::find($id);
        $TailoringPost->delete();

        return redirect()->route('volunteer.dashboard')->with('success',  'Tailoring Post Deleted Successfully');
    }
}