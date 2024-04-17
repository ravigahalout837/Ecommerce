<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function add(request $request){
      return view('admin.category.add');
    }

    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:25',
            'status' => 'required',
            'url' => 'required',
            'description' => 'required'
 ]);
   
        categorie::create($validatedData);
        dd($validatedData); 
        return redirect()->route('category.add');
    }

function category_t()
{
    $product=  product::where('name','like','%'.('tshirt').'%')->get();
return view('wayshop/category',compact('product'));
    
}
 function category_w()
{
    $product=  product::where('name','like','%'.('watch').'%')->get();
return view('wayshop/category',compact('product'));
    
}

function category_s()
{
    $product=  product::where('name','like','%'.('shoes').'%')->get();
return view('wayshop/category',compact('product'));
    
}



}
