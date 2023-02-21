<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class ChefController extends Controller
{
    //
    public function edit($id){
        $data = Chef::find($id);
        return view('profile', ['data'=>$data]);
    }
    //  public function getchef()
    // {
    //     $item = Chef::all();
    //     return view('adminpanel', ['chefs'=>$item]);
    // }
     
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
            $hashpass = Hash::make($req->chef_password);
            Chef::Create([
                'chef_name' => $req->chef_name,
                'chef_email' => $req->chef_email,
                'chef_password' => $hashpass,
                'chef_address' => $req->chef_address,
                'chef_phone_num' => $req->chef_phone_num,
                'chef_profile_photo' => $filePath
            ]);
        }
        return redirect()->route('login');
     }
      public function login_chef(Request $req)
    {
         $req->validate([
            'chef_email' => 'required',
            'chef_password' => 'required'
        ]);

        $chef = Chef::where('chef_email','=',$req->chef_email)->first();
        

        if($chef)
        {
            if(Hash::check($req->chef_password,$chef->chef_password))
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
     public function deldata($id)
    { 
        $delobj = Chef::find($id);
        $delobj ->delete();
        return redirect("adminpanel");

    }
    public function search(Request $req)
    {
        $search_text = $req->input('srch_chef');
        $srchdata = Chef::where('chef_name','LIKE','%'.$search_text.'%')->get();
        return view('adminpanel',['chefs'=>$srchdata]);
    }
    
    
}
