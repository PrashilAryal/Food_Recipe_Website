@extends('layout.main')

@section('content')
<h1 class="text-center">Login</h1>
{{-- @if(Session::has('fail'))
    
    <div class="alert alert-danger" role="alert">
        {{Session::get('fail')}}
</div>
@endif --}}
<form action="" method="POST" class="mx-auto col-6 border border-success border-3 p-3">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection