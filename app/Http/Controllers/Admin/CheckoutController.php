<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class CheckoutController extends Controller
{
   function buy($id)
   {
      $item= product::find($id);
      return view('wayshop/checkout',compact('item'));
      
   }
}
