<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingFrom(){
        return view('backend.layouts.booking.bookingfrom');
    }
    public function bookinglist(){
        return view('backend.layouts.booking.booking');
    }
}
