@extends('layout.main')

@section('content')
<!-- <h1 class="text-center mt-5">Chef Login</h1> -->
{{-- @if(Session::has('fail'))
    
    <div class="alert alert-danger" role="alert">
        {{Session::get('fail')}}
</div>
@endif --}}

<section class="loginSection">
    <div class="loginContainer">
        <form action="{{route('login_chef')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="loginForm">
                <h2>Chef Login</h2>
                @if(Session::has('fail'))
                <div class="loginError">
                    <span class="">{{Session::get('fail')}}</span><br>
                </div>
                @endif
                {{-- @if($errors->any())
                        <span>{{$error}}</span>
                @endif --}}
                <div class="loginFormBox">
                    <div class="loginInputBox w50">
                        <input type="email" name="chef_email" class="@error('chef_email') is-invalid @enderror"
                            id="user_email" autocomplete="off" required>
                        <span>Email</span>
                        {{-- <span style="color:red;">@error ('chef_email') {{$message}} @enderror</span> --}}
                    </div>
                    <div class="loginInputBox w50">
                        <input type="password" name="chef_password" class="@error('chef_password') is-invalid @enderror"
                            id="user_password" autocomplete="off" required>
                        <span>Password</span>
                    </div><br>
                    <div class="loginInputBox w50">
                        <div class="loginButton">
                            <input type="submit" id="login_btn" value="Login">
                        </div>
                    </div>
                </div>
                <div class="loginOptions">
                    <p>or</p>
                    <h4>Sign in with</h4>
                    <ul class="loginSocialMedia">
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