<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
class CartController extends Controller
{
    function index()
    {
        
    }

    public function add_to_cart( request $req)
    {
       // return $req->input();
       if($req->session()->has('email','password'))
       { $cart=new cart;
        $cart->email=$req->session()->get('email');
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('mycart');
       }
       else{
return redirect('/login');
 } }
 function mycart()
 {
     $userEmail = session()->get('email');
     $cart_here= cart::with(['GetProductData'])->where('email', $userEmail)->get();
   return view('wayshop/cartproduct',compact('cart_here'));   
}
function apply_coupen(request $request )
{
 return $request->all();
}
}
