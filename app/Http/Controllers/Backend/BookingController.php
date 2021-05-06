<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingFrom(){
        return view('backend.layouts.booking.bookingfrom');
    }
    public function bookinglist(){
        $bookinglist = Booking::all();
        $title = "Booking List";
        return view('backend.layouts.booking.bookinglist',compact('bookinglist','title'));
    }
    public function bookingcreate(Request $request){
        Booking::create([
            'Booking_Destination'=> $request->bookinddestination,
            'Book_Type'=>$request->booktype,
            'Date'=>$request->date,
            'Car_Id'=>$request->carid,
            'Customer_Id'=>$request->customerid,


        ]);

        return redirect()->back();






    }
}
