@extends('layout.main')

@section('content')
<div class="">

    <h1 class="text-center mb-5 mt-4">Register A New Account</h1>
    <form action="{{route('register_chef')}}" method="post" class=" mx-auto col-6 border border-success border-3 p-3" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control  @error('chef_name') is-invalid @enderror" name="chef_name">
          </div>
           <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control  @error('chef_email') is-invalid @enderror" id="exampleInputEmail1" name="chef_email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control  @error('chef_password') is-invalid @enderror" name="chef_password">
        </div>
        <div class="mb-3">
              <label for="location" class="form-label">Location</label>
              <input type="text" class="form-control  @error('chef_address') is-invalid @enderror" name="chef_address">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Phone Number</label>
            <input type="text" class="form-control  @error('chef_phone_num') is-invalid @enderror" name="chef_phone_num">
        </div>
        <div class="mb-3">
            <label for="pp" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" name="chef_profile_photo">
        </div>

        
        <button type="submit" class="btn btn-success">Submit</button>
    
        </form>
 </div>
 @endsection