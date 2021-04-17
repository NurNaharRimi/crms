<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carFrom()
    {
        return view('backend.layouts.car.carfrom');
    }
    public function carlist()
    {
        return view('backend.layouts.car.car');
    }
}
