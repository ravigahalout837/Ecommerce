<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request; 

use App\Models\banner;

use App\Http\Controllers\Controller;
class BannerController extends Controller
{


    function index()
    {
        $banners = banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    
    function addbanner()
    {

        return view('admin.banners.create');
    }
   
    
         function store(Request $request)
        {           
    
            $validatedData = $request->validate([
                'name' => 'required|max:25',
                'textstyle' => 'required',
                'link' => 'required',
                
    
            ]);
    
            banner::create($validatedData);
    
            return redirect()->route('banners');
        }

        public function delete($id)
    {
        $delete = banner::find($id);
        $delete->delete();
        return redirect()->route('banners');
    }

    public function edit($id)
    {
        $banner = banner::find($id);
        return view('admin.banners.edit', compact('banner'));
    }
    
    function update(request $request, $id)

    {
       //  dd($request->all());

        $request->validate([
            'name' => 'required|max:25',
            'textstyle' => 'required',
            'link' => 'required',
            
        ]);
      

        // Update the product in the database
        $product = banner::find($id);
        $product->update($request->all());

        return redirect()->route('banners');

    }
}
