<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carFrom()
    {
        return view('backend.layouts.car.carfrom');
    }
    public function carlist()
    {
        $carlist = Car::all();
        $title = "Car List";
        return view('backend.layouts.car.carlist',compact('carlist','title'));
    }
    public function carcreate(Request $request)
    {
        Car::create([
            'Car_Name' => $request->carname,
            'Car_Customer_Id' => $request->carcustomerid,
            'Car_Driver_Id' => $request->cardriverid,
            'Car_Type' => $request->cartype,


        ]);

        return redirect()->back();
    }
}
