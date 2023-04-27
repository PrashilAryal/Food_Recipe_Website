@extends('layout.main')
@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg_1 overlay"
    style="background-image: url('{{asset('img/aboutUsBackground.jpg')}}');">
    <h3>about us</h3>
</div>
<!-- bradcam_area_end -->
<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about_thumb2">
                    <div class="img_1">
                        <img src="{{asset('img/about/aboutUsPage.jpg')}}" alt="">
                    </div>

                </div>
            </div>
            <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>About Us</span>

                        </h3>
                    </div>
                    <!-- <p>Avision is a lifestyle brand that focuses on the Nepalese culture.
                        Being a player in the Nepali consumer electronics setting.
                        We understand the importance of providing a quality product at affordable price.

                        Avision is GENEROUS in terms of features and quality, FRIENDLY
                        and responsive to the needs of the consumers, HUNK in design and innovation,
                        SWEET in terms of prices. Our Visions is to be in the homes of every Juan Like an ordinary
                        nepali, We focus and Strive to bring our vision to reality. Avision - "Bring your vision to
                        life"
                    </p> -->
                    <p>Welcome to Chef's Kitchen, your ultimate online destination for delicious and easy-to-follow food
                        recipes! Our website is dedicated to help you explore the world of cooking and make the most out
                        of your time in the kitchen. We believe that cooking should be a fun and enjoyable experience.
                        That's why we've curated a wide selection of recipes from all over the world that are both easy
                        to make and incredibly tasty. From classic comfort foods to healthy meal options, our recipes
                        cater to a variety of tastes and preferences. Our team of experienced chefs and food bloggers
                        work tirelessly to create and test new recipes, so you can be sure that every dish you make from
                        our website will turn out perfectly. Whether you're a seasoned home cook or just starting out,
                        Chef's Kitchen has something for everyone. So why wait? Browse our collection of recipes today
                        and start cooking up a storm in your own kitchen!</p>
                    <div class="img_thumb">
                        <!-- <img src="{{asset('img/chandra.png')}}" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->

<!-- gallery_start -->
<div class="gallery_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-70 text-center">
                    <span>Gallery Image</span>
                    <h3>Our Gallery</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="single_gallery big_img">
        <a class="popup-image" href="{{asset('img/gallery/khana.jpg')}}">
            <i class="ti-plus"></i>
        </a>
        <img src="{{asset('img/gallery/khana.jpg')}}" alt="">
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="{{asset('img/gallery/2.png')}}">
            <i class="ti-plus"></i>
        </a>
        <img src="{{asset('img/gallery/2.png')}}" alt="">
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="{{asset('img/gallery/3chi.3.jpg')}}">
            <i class="ti-plus"></i>
        </a>
        <img src="{{asset('img/gallery/chi.3.jpg')}}" alt="">
    </div>

    <div class="single_gallery small_img">
        <a class="popup-image" href="{{asset('img/gallery/chow.png')}}">
            <i class="ti-plus"></i>
        </a>
        <img src="{{asset('img/gallery/chow.png')}}" alt="">
        <i class="ti-plus"></i>
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="{{asset('img/gallery/foo.png')}}">
            <i class="ti-plus"></i>
        </a>
        <img src="{{asset('img/gallery/foo.png')}}" alt="">
    </div>
    <div class="single_gallery big_img">
        <a class="popup-image" href="{{asset('img/gallery/roll.jpg')}}">
            <i class="ti-plus"></i>
        </a>
        <img src="{{asset('img/gallery/roll.jpg')}}" alt="">
    </div>
</div>

<!-- testimonial_area_start  -->
<div class="testimonial_area ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60 text-center">
                    <span>Testimonials</span>
                    <h3>Happy Customers</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <p>"I am a student living in kathmandu. I don't know how to cook but this site has
                                        made me a mini chef. With the help of this site, I would love to cook anytime."
                                    </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="img/testmonial/ka.png" alt="">
                                        </div>
                                        <h4>Kushal amatya</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <p>"I love the clean UI of this website. No ads, No unnecessary contents."</p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="img/testmonial/1.png" alt="">
                                        </div>
                                        <h4>Prashil aryal</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <p>"This website is really awesome. I can cook variety of foods seeing the recipes.
                                        Also I can try foods from all the world at my own kitchen."</p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="img/testmonial/3.png" alt="">
                                        </div>
                                        <h4>Nabin sapkota</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial_area_ned  -->

<!-- instragram_area_start -->
<div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="{{asset('img/instragram/first.png')}}" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="{{asset('img/instragram/san.png')}}" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="{{asset('img/instragram/un.jpg')}}" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="{{asset('img/instragram/food.jpg')}}" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- instragram_area_end -->

<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                            Kathmandu
                        </h3>
                        <p>5th floor, MBO Plaza <br>
                            Darbarmarg <br>
                            <a href="#">ktmkitchen@gmail.com</a>
                        </p>
                        <a class="number" href="#">983787654</a>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                            Pokhara
                        </h3>
                        <p>2nd floor, City Home <br>
                            Birauta <br>
                            <a href="#">ktmkitchen@gmail.com</a>
                        </p>
                        <a class="number" href="#">97483 6782</a>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                            Syangja
                        </h3>
                        <p>3rd floor, Horizon <br>
                            Jaisidanda <br>
                            <a href="#">ktmkitchen@gmail.com</a>
                        </p>
                        <a class="number" href="#">97438 7628</a>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="socail_links text-center">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="uil uil-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="uil uil-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="uil uil-facebook-f"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">

                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://prashilaryal.com" target="_blank">codeDevil</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
</footer>




@endsection