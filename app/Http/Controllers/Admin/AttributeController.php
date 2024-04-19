<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\models\Product;
use App\models\attribute;

use Illuminate\Http\Request;

class AttributeController extends Controller
{
    function add_attribute( request $request, $id)
    {  
         $productdetail = product::where('id',$id)->first();
     
       return  view('admin.product.attribute')->with(compact('productdetail'));
    
    }
    function store( request $request, $id)
    {           $productdetail = product::where(['id'=>$id])->first();
    if($request->ismethod('post')){
      $data = $request->all();
      foreach($data['SKU'] as $key =>$val)
      {
    
            //duplicate prevent size
            $attributsize=  attribute::where(['product_id'=>$id,'size'=>$data['size'][$key]])->count();
            if($attributsize){
              return redirect ('attribute/add/'.$id);
            }

            $myatrribute= new attribute;
            $myatrribute->product_id=$id;
            $myatrribute->SKU=$val;
            $myatrribute->size=$data['size'][$key];          
            $myatrribute->price=$data['price'][$key];
            $myatrribute->stock=$data['stock'][$key];

            $myatrribute->save();


    }
    return redirect('/attribute/add/ '.$id);

    // return redirect('/admin/product/add_attribute')->with(compact('productdetail'));
      }

    }

    public function delete($id)
    {
        $delete = attribute::find($id);
        $delete->delete();
        return redirect()->route('products');
    }

      public function edit($id)
      {
          $attribute = attribute::find($id);
          return view('admin.product.attribute_edit', compact('attribute'));
      }


      function update(request $request, $id)

      {
         //  dd($request->all());
  
          $request->validate([
              'SKU' => 'required|max:25',
              'size' => 'required',
              'price' => 'required',
              
          ]);
        
  
          // Update the product in the database
          $product = attribute::find($id);
          $product->update($request->all());
  
          return redirect()->route('products');
  
      }

       
    }