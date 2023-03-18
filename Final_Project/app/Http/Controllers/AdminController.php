<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Chef;
use App\Models\Recipe;
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
                    $recipes = Recipe::all();
                    // return view('adminpanel',compact('chefs', 'data', 'recipes'));
                    return view('adminDashboard',compact('chefs', 'data', 'recipes'));
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
        $adminCheck = Session::get('adminid');
        $data = Chef::find($adminCheck);
        return view('viewChef',compact('chefs', 'data'));
    }

    public function edit_admin(Request $req){
        $adminObj = Chef::find($req->id);
        $adminObj->chef_name = $req->chef_name;
        $adminObj->chef_address = $req->chef_address;
        $adminObj->chef_email = $req->chef_email;
        $adminObj->chef_phone_num = $req->chef_phone_num;
        if($req->chef_password==NULL){
            $adminObj->save();
        }else{
            $hashpass = Hash::make($req->chef_password);
            $adminObj->chef_password = $hashpass;
            $adminObj->save();
        }
        $chefs = Chef::all();
        $recipes = Recipe::all();
        $data = Chef::find(Session::get('adminid'));
        return view('adminSetting', compact('chefs', 'data', 'recipes'));
    }
   
}