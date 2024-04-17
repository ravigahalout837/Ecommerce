<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\product;


use Illuminate\Http\Request;

class IndexController extends Controller
{
   function index()

   {
      $banner = banner::all();
      $product = product::all();
      $records = product::all();
      return view('wayshop.index')->with(compact('banner', 'product','records'));
   }

   function productDetail($name)
   {
      $product = Product::where('name',$name)->first();
      return view('wayshop.product_detail',compact('product')); 
   }
}
