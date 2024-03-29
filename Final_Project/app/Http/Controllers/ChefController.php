<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as Session;

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
        if($req->chef_password==NULL){
            $chefObj->save();
        }else{
            $hashpass = Hash::make($req->chef_password);
            $chefObj->chef_password = $hashpass;
            $chefObj->save();
        }


        return redirect()->route('profile');
    }

     public function register_chef(Request $req){
        // dd($req->all());
        $req->validate([
            'chef_name' => 'required',
            'chef_email' => 'required',
            'chef_password' => 'required',
            'chef_address' => 'required',
            'chef_phone_num' => 'required'
            // 'chef_profile_photo' => 'required'
        ]);
        if($req->hasFile('chef_profile_photo'))
        {
            $photo = $req->file('chef_profile_photo');
            $filePath = $photo->store('images', 'public');
            $chefRole = "chef";
            $hashpass = Hash::make($req->chef_password);
            Chef::Create([
                'chef_name' => $req->chef_name,
                'chef_email' => $req->chef_email,
                'chef_password' => $hashpass,
                'chef_address' => $req->chef_address,
                'chef_phone_num' => $req->chef_phone_num,
                'chef_profile_photo' => $filePath,
                'chef_role' => $chefRole
            ]);
        }else{
            // $photo = $req->file('chef_profile_photo');
            // $filePath = $photo->store('images', 'public');
            $chefRole = "chef";
            $hashpass = Hash::make($req->chef_password);
            Chef::Create([
                'chef_name' => $req->chef_name,
                'chef_email' => $req->chef_email,
                'chef_password' => $hashpass,
                'chef_address' => $req->chef_address,
                'chef_phone_num' => $req->chef_phone_num,
                // 'chef_profile_photo' => $filePath,
                'chef_role' => $chefRole
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
                session()->put('userid',$chef->id);
                $chefCheck = Session::get('userid');
                $data = Chef::find($chefCheck);
                $roleCheck = $data->chef_role;
                if($roleCheck=='chef'){
                    return redirect('/');
                }
                else{
                    // return view('login');
                    if(Session::has('userid')){
                        Session::pull('userid');
                        return back()->with('fail','User Not Found');
                    }
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
     public function deldata($id)
    { 
        $delobj = Chef::find($id);
        $delobj ->delete();
        $chefs= Chef::all();
        return view('viewChef',compact('chefs'));

    }
    public function search(Request $req)
    {
        $search_text = $req->input('srch_chef');
        $srchdata = Chef::where('chef_name','LIKE','%'.$search_text.'%')->get();
        return view('adminpanel',['chefs'=>$srchdata]);
    }

    public function logout(){
        if(Session::has('userid')){
            Session::pull('userid');
            return redirect('/');
            
        }
    } 

}