<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class MyaccountController extends Controller
{
    function index()
    {
        return view('wayshop.Myaccount');
    }

    function login()
    {
        return view('wayshop.login');
    }

    public function check(request $req)
    {
        // return $req->input();
        $user = User::where(['email' => $req->email,'password' => $req->password])->first();
          
        if ($user) {
            $data = $req->input('email');
            $passdata = $req->input('password');
            $req->session()->put('password', $passdata);
            $req->session()->put('email', $data);
        return redirect ('/profile');
        } else {
            // Email does not exist in the database
            return 'not found';
        }
    }
    function resister()
    {
        return view('wayshop.resister');
    }

    
    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:25',
            'email' => 'required',
            'password' => 'required',
            'address'=>'required',
            'user_pic'=>'required'
        ]);

        user::create($validatedData);

        return redirect('Myaccount');
    }

    function profile()

    {
        if(session()->get('email')){
         $data =session()->all();
         return view('wayshop/profile',compact('data'));
        }
        else {
            return "here is nothing";
        }}

        function logout()
    {
            session()->forget('email');
            return redirect ('Myaccount');
       
    }
}
