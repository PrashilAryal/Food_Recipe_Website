<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
     public function login_admin(Request $req)
    {
         $req->validate([
            // 'admin_email' => 'required',
            // 'admin_password' => 'required'
            'chef_email' => 'required',
            'chef_password' => 'required'
        ]);

        // $admin = Admin::where('admin_email','=',$req->admin_email)->first();
        $admin = Chef::where('chef_email','=',$req->chef_email)->first();
        

        if($admin)
        {
            // if($req->chef_password==$admin->chef_password)
            if(Hash::check($req->chef_password,$admin->chef_password))
            {
                return redirect()->route('adminpanel');
            }
            else{
                return back()->with('fail','Password not matched');
            }
        }
        else{
            return back()->with('fail','User Not Found');
        }
    }
   
}