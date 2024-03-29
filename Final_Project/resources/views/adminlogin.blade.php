@extends('layout.main')

@section('content')


<section class="loginSection">
    <div class="loginContainer">
        <form action="{{route('login_admin')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="loginForm">
                <h2>Admin Login</h2>
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
            </div>
        </form>
    </div>
</section>

@endsection