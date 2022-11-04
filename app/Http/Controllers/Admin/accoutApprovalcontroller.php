<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class accoutApprovalcontroller extends Controller
{
    public function approve($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->approved = True;
        $admin->update();
        return redirect()->route('admin.dashboard');

    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function volunteer()
    {
        $admins = Admin::where('approved', false)->orderby('created_at', 'desc')->paginate(5);
        return view('admin.pending', compact('admins'));
    }
    public function delete($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admin.dashboard');
    }
    public function show($id){
        $admins = Admin::find($id);

        return view('admin.show', compact('admins'));
    }
}
