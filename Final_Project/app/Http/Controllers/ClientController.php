<?php

namespace App\Http\Controllers;
use App\Models\Client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function customersave(Request $req){
        // dd($req->customer_first_name);
        $req->validate([
            'customer_first_name' => 'required',
            'customer_last_name' => 'required',
            'cutomer_email' => 'required',
            'customer_subject' => 'required',
            'customer_message' => 'required',
         
        ]);
       
            // $photo = $req->file('chef_profile_photo');
            // $filePath = $photo->store('images', 'public');

        
            // dd($client);
        
            Client::Create([
                'customer_first_name' => $req->customer_first_name,
                'customer_last_name' => $req->customer_last_name,
                'cutomer_email' => $req->customer_email,
                'customer_subject' => $req->customer_subject,
                'customer_message' => $req->customer_message,
            ]);
        
        return redirect()->route('contactPage');
     }
}
