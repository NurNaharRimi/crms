<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function driverFrom()
    {
        return view('backend.layouts.driver.driverfrom');
    }
    public function driverlist(){
        return view('backend.layouts.staff.staff');
    }
}
