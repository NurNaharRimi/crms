<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function driverFrom()
    {
        return view('backend.layouts.driver.driverfrom');
    }

    public function driverlist()
    {
        $driverlist = Driver::all();
        $title = "Driver List";
        return view('backend.layouts.driver.driverlist',compact('driverlist','title'));


    }
    public function drivercreate(Request $request){
        Driver::create([
            'Name' => $request->driver_name,
            'Password' => $request->driver_password,
            'Email' => $request->driver_email,
            'Contact' => $request->driver_contact,
            'Address' => $request->driver_address,
            'Age' => $request->driver_age,

        ]);

        return redirect()->back();


    }
}
