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
        return view('backend.layouts.admin.admin');
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
