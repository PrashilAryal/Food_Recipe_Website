@extends('layout.main')

@section('content')
    <form action="" class="mx-auto col-4 border border-success border-3 p-3 mt-5">
        <h3 class="text-center mt-5">Login As:</h3>
         <div class="col-md-12 text-center">
            <button class="btn btn-success mt-5 p-2"><a href="{{route('adminlogin')}}" class="text-decoration-none" style="color:beige;">Admin</a></button>

            <button class="btn btn-primary mt-5 p-2"><a href="{{route('login')}}" class="text-decoration-none" style="color:beige;">Chef</a></button>
         </div>

    </form>
@endsection