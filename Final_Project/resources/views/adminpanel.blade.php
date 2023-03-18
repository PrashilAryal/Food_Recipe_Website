<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard
    </title>
    <link rel="stylesheet" href="{{ URL::asset('css/adminstyle.css'); }}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300;400;900&family=Fira+Sans&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/6ac97bb13c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <!-- <li> -->
            <div class="adminLogo">
                <a href="{{url('/adminpanel')}}">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                    <!-- <span class="icon">
                        <ion-icon name="fast-food-outline"></ion-icon>
                    </span> -->
                    <!-- <span class="title">Chef's Kitchen</span> -->
                </a>
            </div>
            <!-- </li> -->
            <ul>
                <li>
                    <a href="{{url('/view-chef')}}">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="title">Chefs</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/view-message')}}">
                        <span class="icon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <!-- <ion-icon name="settings-outline"></ion-icon> -->
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="title">Setting</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/logout-admin')}}">
                        <span class="icon">
                            <i class="fa fa-right-from-bracket"></i>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search -->
                <form action="{{url('/search')}}" method="get">

                    <div class="search">
                        <label for="">
                            <input type="text" placeholder="Search Chef" name="srch_chef" />
                            <!-- <ion-icon name="search-outline"></ion-icon> -->
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </label>
                    </div>
                </form>
                <!-- userImg -->
                <div class="adminTopName">
                    <h3>{{$data->chef_name}}</h3>
                    <div class="user">
                        <span>
                            <img src="{{asset('storage/'.$data->chef_profile_photo)}}" alt="">
                            <!-- <ion-icon name="person-circle-sharp" size="large"></ion-icon> -->
                        </span>
                    </div>
                </div>
            </div>
            <!-- cards -->
            {{-- <div class="cardBox">
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="CardName">Daily Views</div>
            </div>
            <div class="iconBox">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="CardName">Daily Views</div>
            </div>
            <div class="iconBox">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="CardName">Daily Views</div>
            </div>
            <div class="iconBox">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="CardName">Daily Views</div>
            </div>
            <div class="iconBox">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
        </div> --}}
            <!-- order detail list -->
            <div class="details">
                @yield('adminContent')
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
    //Menu toogle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");

    toggle.onclick = function() {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
    };

    //add hovered class in selected list item
    let list = document.querySelectorAll(".navigation li");

    function activelink() {
        list.forEach((item) => item.classList.remove("hovered"));
        this.classList.add("hovered");
    }
    list.forEach((item) => item.addEventListener("mouseover", activelink));
    </script>
</body>

</html>