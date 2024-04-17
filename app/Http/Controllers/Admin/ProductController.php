<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\attribute;


class ProductController extends Controller
{

    function index()
    {
        $products = Product::all();
        $attribute = attribute::all();
        
        return view('admin.product.index')->with(compact('products','attribute'));
    }


    public function addProduct()
    {

        return view('admin.product.create');
    }

    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:25',
            'code' => 'required',
            'color' => 'required',
            'price' => 'required',
            'description' => 'required',
            'status' => 'required',
            'images' => 'required',
           
  
        ]);

        Product::create($validatedData);

        return redirect()->route('products');
    }


    public function delete($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        return redirect()->route('products');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }


    function update(request $request, $id)

    {
       //  dd($request->all());

        $request->validate([
            'name' => 'required|max:25',
            'code' => 'required',
            'color' => 'required',
            'price' => 'required',
            'description' => 'required',
            'images' => 'required',
        ]);
      

         // Update the product in the database
        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('products');

    }
}

function buy()
{
return "hello";    
}