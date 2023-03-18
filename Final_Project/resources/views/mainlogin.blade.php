@extends('layout.main')

@section('content')
<div class="mainLoginBox" style="background-image: url('{{asset('images/mainLoginBg.png')}}');">
    <div class="mainLoginCard">
        <div class="mainLoginContainer">
            <h3 class="text-center mt-5">I am a, </h3>
            <div class="col-md-12 text-center">
                <button class="btn btn-success mt-5 p-2"><a href="{{route('adminlogin')}}" class="text-decoration-none"
                        style="color:beige;">Admin</a></button>

                <button class="btn btn-primary mt-5 p-2"><a href="{{route('login')}}" class="text-decoration-none"
                        style="color:beige;">Chef</a></button>
            </div>
        </div>
    </div>
</div>
@endsection