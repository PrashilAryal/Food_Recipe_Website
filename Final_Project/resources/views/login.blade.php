@extends('layout.main')

@section('content')
<h1 class="text-center mt-5">Login</h1>
{{-- @if(Session::has('fail'))
    
    <div class="alert alert-danger" role="alert">
        {{Session::get('fail')}}
</div>
@endif --}}
<form action="{{route('login_chef')}}" method="POST" class="mx-auto col-6 border border-success border-3 p-3" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail address</label>
        <input type="email" class="form-control @error('chef_email') is-invalid @enderror" id="exampleInputEmail1" name="chef_email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        {{-- <span style="color:red;">@error ('chef_email') {{$message}} @enderror</span> --}}
        
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control @error('chef_password') is-invalid @enderror" name="chef_password">
    </div>
    @if(Session::has('fail'))
    <span style="color:red;"class="">{{Session::get('fail')}}</span><br>
    @endif
    {{-- @if($errors->any())
        <span>{{$error}}</span>
    @endif --}}

    <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection