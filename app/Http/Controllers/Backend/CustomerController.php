<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerFrom(){
        return view('backend.layouts.customer.customerfrom');
    }
    public function customerlist(){
        return view('backend.layouts.customer.customer');
    }
}
