<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminFrom(){
        return view('backend.layouts.admin.adminfrom');
    }
    public function adminlist(){
        $adminlist = Admin::all();
        $title = "Admin List";
        return view('backend.layouts.admin.adminlist',compact('adminlist','title'));
    }

    public function admincreate(Request $request){
        Admin::create([
            'Name'=> $request->admin_name,
            'Password'=>$request->admin_password,
            'Email'=>$request->admin_email,
            'Contact'=>$request->admin_contact,
            'Address'=>$request->admin_address,


        ]);

        return redirect()->back();






    }



}
