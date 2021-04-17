<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staffFrom(){
        return view('backend.layouts.staff.stafffrom');
    }
    public function stafflist(){
        return view('backend.layouts.staff.staff');
    }
}
