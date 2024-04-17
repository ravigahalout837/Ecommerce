<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\product;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminlogin(request $req)
    {
        // return $req->input();
        $user = admin::where(['email' => $req->email,'password' => $req->password])->first();
        
        if ($user) {
            $data = $req->input('email');
            $passdata = $req->input('password');
            $req->session()->put('password', $passdata);
            $req->session()->put('email', $data);
        return   redirect('adminpanel');
        } else {
            // Email does not exist in the database
            return 'not found';
        }
    }



}