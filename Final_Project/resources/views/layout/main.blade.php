<?php use Illuminate\Support\Facades\Auth; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's Kitchen</title>
    <!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="icon" href="{{ asset('../images/icon.png')}}" type="image/png">
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recipe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recipe.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/6ac97bb13c.css" crossorigin="anonymous"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    @vite(['resources/js/app.js'])
</head>

<body>
    <!-- Navbar code here -->
    <div class="">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <img class="navbar-brand" src="{{ asset('../images/logo.png') }}" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if((Session::get('adminid'))!=NULL)
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('AboutPage')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('contactPage')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('recipePage')}}">Recipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @php
                                $name = DB::table('chefs')->where('id',(Session::get('adminid')))->first();
                                @endphp

                                Hi, {{$name->chef_name}}!
                            </a>


                            <ul class="dropdown-menu" style="z-index:9999 !important" aria-labelledby="navbarDropdown">
                                <!-- <li><a class="dropdown-item" href="{{route('logoutAdmin')}}">Logout</a></li> -->
                                <li><a class="dropdown-item" href="{{route('adminDashboard')}}">Dashboard</a></li>
                            </ul>


                        </li>
                    </ul>

                    @elseif(empty(Session::get('userid')))
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('AboutPage')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('contactPage')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('recipePage')}}">Recipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Join Us
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('mainlogin')}}">Login</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Register new Account</a></li>
                            </ul>
                        </li>
                    </ul>

                    @else
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('AboutPage')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('contactPage')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('recipePage')}}">Recipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @php
                                $name = DB::table('chefs')->where('id',(Session::get('userid')))->first();
                                @endphp

                                Hi, {{$name->chef_name}}!
                            </a>


                            <ul class="dropdown-menu" style="z-index:9999 !important" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="{{route('profile')}}">Your Profile</a></li>


                            </ul>


                        </li>
                    </ul>

                    @endif
                    <form class="d-flex" method="GET" action="{{route('recipesearch')}}">
                        <input class="form-control me-2" type="search" name="recipesearch"
                            placeholder="Search recipe..." aria-label="Search">
                        <button class="btn-search" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="content">
        @yield('content')
    </div>


    <div class="mt-5">

        <footer class="text-center text-lg-start text-white" style="background-color: #2c5238">

            <section class="d-flex justify-content-between p-4"
                style="background-color: #266b38; padding: 0.5rem !important;display: flex !important;justify-content: center !important;align-items: center !important;">
                <div class="me-5 getConnected">
                    <span>Get connected with us on social networks:</span>
                </div>
                <div class="footerSocialMedia">
                    <a href="https://www.google.com/" class="fa fa-google"></a>
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
                    <!-- <li><a href="#"><img src="{{ asset('../images/google.png') }}" alt=""></a></li> -->
                </div>

            </section>


            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold">Chef's Kitchen</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p class="text-white">
                                Chef's Kitchen is optimized for the best cooking enthusiast's interests.
                                While using this site, you agree to have read and accepted our <a href="{{route('tos')}}">terms of
                                    use</a>, <a href="{{route('cookie')}}">cookie and privacy policy.</a>
                            </p>
                        </div>

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#best" class="text-white text-decoration-none">Our Best Recipies</a>
                            </p>
                            <p>
                                <a href="#veg" class="text-white text-decoration-none">Veggie Products</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white text-decoration-none">Dairy Products</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white text-decoration-none">Chef's Recommendation</a>
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="{{route('profile')}}" class="text-white text-decoration-none">Your Account</a>
                            </p>
                            <p>
                                <a href="{{route('AboutPage')}}" class="text-white text-decoration-none">About Us</a>
                            </p>
                            <p>
                                <a href="{{route('contactPage')}}" class="text-white text-decoration-none">Contact</a>
                            </p>
                            <p>
                                <a href="{{route('recipePage')}}" class="text-white text-decoration-none">Recipe</a>
                            </p>
                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p class="text-white"><i class="fas fa-home mr-3 "></i> Kamalpokhari, 44600, Kathmandu</p>
                            <p class="text-white"><i class="fas fa-envelope mr-3 "></i> ckitchenbusiness@gmail.com</p>
                            <p class="text-white"><i class="fas fa-phone mr-3 "></i> +977 1234567</p>
                            <p class="text-white"><i class="fas fa-print mr-3 "></i> +977 9818181818</p>
                        </div>
                    </div>
                </div>
            </section>


            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">All Rights Reserved </a>
            </div>

        </footer>


    </div>

    <script>
        $(document).ready(function() {
         $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
         if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
        scrollTop: target.offset().top
      }, 1000);
    }
  });
});
    </script>
</body>

</html>