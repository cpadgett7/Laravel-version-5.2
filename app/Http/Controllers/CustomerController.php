<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer as Customer;

class CustomerController extends Controller
{
    public function customer($id)
    {
        $customer = Customer::find($id);
        return view('customer', array('cuatomer' => $customer));
    }
}
