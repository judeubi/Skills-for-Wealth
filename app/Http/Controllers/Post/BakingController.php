<?php

namespace App\Http\Controllers\Baking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Baking;

class BakingController extends Controller
{
    //
    public function baking(){
        return view('volunteer.pages.baking');
    }
   
   
    public function post_baking(Request $request){
        $form_data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf,jpg,svg,txt,png,jpeg,'
        ]);

        $file = $request->file('file')->store('publics/posts');
        $BakingPost = new Baking();
        $BakingPost->title = $request->title;
        $BakingPost->description = $request->description;
        $BakingPost->file = $file;
        $BakingPost = $BakingPost->save();
        return redirect()->route('volunteer.dashboard')->with('success', 'Post Created Successfully');
    }
    public function baking_edit($id){
        $bakingpost = Baking::find($id);
        
        return view('volunteer.tailoring.baking');
    }
    public function update(Request $request ,$id){
       
        $form_data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf,jpg,svg,txt,png,jpeg,'
        ]);
        //dd($form_data);
        $file = $request->file('file')->store('public/post');
        $BakingPost = Baking::find($id);
        $BakingPost->title = $request->title;
        $BakingPost->description = $request->description;
        $BakingPost->file = $file;
        $BakingPost->update();
        return redirect()->route('volunteer.dashboard')->with('success', 'Baking Post Updated Successfully');
    }
    public function destroy($id){
        $BakingPost = Baking::find($id);
        $BakingPost->delete();

        return redirect()->route('volunteer.dashboard')->with('success',  'Baking Post Deleted Successfully');
    }
}