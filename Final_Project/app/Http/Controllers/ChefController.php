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

     public function register_chef(Request $req){
        // dd($req->all());
        $req->validate([
            'chef_name' => 'required',
            'chef_email' => 'required',
            'chef_password' => 'required',
            'chef_address' => 'required',
            'chef_phone_num' => 'required',
            'chef_profile_photo' => 'required'
        ]);
        if($req->hasFile('chef_profile_photo'))
        {
            $photo = $req->file('chef_profile_photo');
            $filePath = $photo->store('images', 'public');
            Chef::Create([
                'chef_name' => $req->chef_name,
                'chef_email' => $req->chef_email,
                'chef_password' => $req->chef_password,
                'chef_address' => $req->chef_address,
                'chef_phone_num' => $req->chef_phone_num,
                'chef_profile_photo' => $filePath
            ]);
        }
        return redirect()->route('login');
     }
}
