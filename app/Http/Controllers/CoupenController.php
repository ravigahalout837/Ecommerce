<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coupen;
class CoupenController extends Controller
{
    
    function add()
    {

        return view('admin.coupens.add');
    }
   
    
         function store(Request $request)
        {           
        //   return $request->input();

        // dd($request->all());

            // $validatedData = $request->validate([
              
                
            //     'coupen_code' => 'required|max:25',
            //     'ammount' => 'required',
            //     'ammount_type' => 'required',
            //     'expiry_date'=>'required|date_format:d/m/y',
            //     'status'=> 'required'
                
    
            // ]);

 
            coupen::create($request->all());
    
            return redirect('add_coupen');
        }


        function coupens()
        {
            $mycoupen = coupen::all();
        return view('admin.coupens.view_coupen', compact('mycoupen'));

        }
        function edit(){
        return view('admin.coupens.edit');
        }
}
