<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checkout;
use App\Models\product;

class PaymentController extends Controller
{
    public function checkout(Request $req)
    {
        checkout::create($req->all());
        return redirect()->route('payment');
    }

    function payment()
    {
        return view('wayshop.payment');
     }
    



    }