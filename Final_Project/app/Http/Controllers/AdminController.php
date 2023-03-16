<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Chef;
use Illuminate\Support\Facades\Session as Session;
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
        // $admin1 = Chef::where('chef_role', '=','admin');
        

        if($admin)
        {
            // if($req->chef_password==$admin->chef_password)
            if(Hash::check($req->chef_password,$admin->chef_password))
            {
                session()->put('adminid',$admin->id);
                $adminCheck = Session::get('adminid');
                $data = Chef::find($adminCheck);
                $roleCheck = $data->chef_role;
                if($roleCheck=='admin'){
                    $chefs= Chef::all();
                    return view('adminpanel',compact('chefs'));
                    // return view('adminpanel');
                }
                else{
                    return back()->with('fail','User Not Found');
                }
            }
            else{
                return back()->with('fail','Password not matched');
            }
        }
        else{
            return back()->with('fail','User Not Found');
        }
    }
    public function logoutAdmin(){
        if(Session::has('adminid')){
            Session::pull('adminid');
            return redirect('/');
        } 
    }

    public function view_chef(){
        $chefs= Chef::all();
        return view('viewChef',compact('chefs'));
    }
   
}