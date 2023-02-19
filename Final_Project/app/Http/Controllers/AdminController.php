<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function login_admin(Request $req)
    {
         $req->validate([
            'admin_email' => 'required',
            'admin_password' => 'required'
        ]);

        $admin = Admin::where('admin_email','=',$req->admin_email)->first();
        

        if($admin)
        {
            if($req->admin_password==$admin->admin_password)
            {
                return redirect('/');
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
