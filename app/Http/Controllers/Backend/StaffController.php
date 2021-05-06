<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staffFrom()
    {
        return view('backend.layouts.staff.stafffrom');
    }

    public function stafflist()
    {
        $stafflist = Staff::all();
        $title = "Staff List";
        return view('backend.layouts.staff.stafflist',compact('stafflist','title'));
    }

    public function staffcreate(Request $request)
    {
        Staff::create([
            'name' => $request->staffname,
            'password' => $request->staffpassword,
            'email' => $request->staffemail,
            'contact' => $request->staffcontact,
            'address' => $request->staffaddress,

        ]);

        return redirect()->back();


    }
}
