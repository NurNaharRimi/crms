<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerFrom(){
        return view('backend.layouts.customer.customerfrom');
    }
    public function customerlist(){
        $customerlist = Customer::all();
        $title = "Customer List";
        return view('backend.layouts.customer.customerlist',compact('customerlist','title'));
    }
    public function customercreate(Request $request)
    {
        Customer::create([
            'Name' => $request->customername,
            'Address' => $request->customeraddress,
            'Contact' => $request->customercontact,
            'Email' => $request->customeremail,
            'Password' =>($request->customerpassword),


        ]);

        return redirect()->route('customer.list');
    }
}
