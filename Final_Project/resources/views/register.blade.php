@extends('layout.main')

@section('content')
<!-- <div class="" style="margin-bottom: 5px;">

    <h1 class="text-center mb-5 mt-4">Register A New Account</h1>
    <form action="{{route('register_chef')}}" method="post" class=" mx-auto col-6 border border-success border-3 p-3"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control  @error('chef_name') is-invalid @enderror" name="chef_name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control  @error('chef_email') is-invalid @enderror" id="exampleInputEmail1"
                name="chef_email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control  @error('chef_password') is-invalid @enderror"
                name="chef_password">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control  @error('chef_address') is-invalid @enderror" name="chef_address">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Phone Number</label>
            <input type="text" class="form-control  @error('chef_phone_num') is-invalid @enderror"
                name="chef_phone_num">
        </div>
        <div class="mb-3">
            <label for="pp" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" name="chef_profile_photo">
        </div>


        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div> -->
<section class="registerSection">
    <div class="registerContainer">
        <form action="{{route('register_chef')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="registerForm">
                <h2>Register</h2>
                @if(Session::has('fail'))
                <div class="registerError">
                    <span class="">{{Session::get('fail')}}</span><br>
                </div>
                @endif
                {{-- @if($errors->any())
                        <span>{{$error}}</span>
                @endif --}}
                <div class="registerFormBox">
                    <div class="registerInputBox w50">
                        <input type="text" name="chef_name" class="@error('chef_name') is-invalid @enderror"
                            id="chef_name" autocomplete="off" required>
                        <span>Fullname</span>
                    </div>
                    <div class="registerInputBox w50">
                        <input type="email" name="chef_email" class="@error('chef_email') is-invalid @enderror"
                            id="chef_email" autocomplete="off" required>
                        <span>Email</span>
                        {{-- <span style="color:red;">@error ('chef_email') {{$message}} @enderror</span> --}}
                    </div>
                    <div class="registerInputBox w50">
                        <input type="text" name="chef_password" class="@error('chef_password') is-invalid @enderror"
                            id="chef_password" autocomplete="off" required>
                        <span>Password</span>
                    </div><br>
                    <div class="registerInputBox w50">
                        <input type="text" name="chef_address" class="@error('chef_address') is-invalid @enderror"
                            id="chef_address" autocomplete="off" required>
                        <span>Address</span>
                    </div>
                    <div class="registerInputBox w50">
                        <input type="text" name="chef_phone_num" class="@error('chef_phone_num') is-invalid @enderror"
                            id="chef_phone_num" autocomplete="off" required>
                        <span>Phone Number</span>
                    </div>
                    <div class="registerInputBox w50">
                        <label for="" style="color:black;">Profile Photo</label>
                        <input type="file" name="chef_profile_photo" id="chef_profile_photo" autocomplete="off">
                    </div>
                    <div class="registerInputBox w50">
                        <div class="registerButton">
                            <input type="submit" id="register_btn" value="Register">
                        </div>
                    </div>
                </div>
                <div class="registerOptions">
                    <p>or</p>
                    <h4>Register with</h4>
                    <ul class="registerSocialMedia">
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <!-- <li><a href="#"><img src="{{ asset('../images/google.png') }}" alt=""></a></li> -->
                        <!-- <li><a href="#"><img src="{{ asset('../images/facebook.png') }}" alt=""></a></li> -->
                        <!-- <li><a href="#"><img src="{{ asset('../images/location.png') }}" alt=""></a></li> -->
                        <!-- <li><a href="#"><img src="{{ asset('../images/location.png') }}" alt=""></a></li> -->
                        <!-- <li><a href="#"><img src="{{ asset('../images/location.png') }}" alt=""></a></li> -->
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection