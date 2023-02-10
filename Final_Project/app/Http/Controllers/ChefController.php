<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    //
    public function edit($id){
        $data = Chef::find($id);
        return view('profile', ['data'=>$data]);
    }
     
    public function update_chef(Request $req){
        $chefObj = Chef::find($req->id);
        $chefObj->chef_name = $req->chef_name;
        $chefObj->chef_address = $req->chef_address;
        $chefObj->chef_email = $req->chef_email;
        $chefObj->chef_phone_num = $req->chef_phone_num;
        $chefObj->chef_password = $req->chef_password;

        $chefObj->save();

        return redirect()->route('profile');
    }
}