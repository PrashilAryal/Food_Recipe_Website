@extends('layout.main')

@section('content')
<!-- homepage code here -->

<!-- Hero Section -->
<section class="heroSection">
    <div class="container mx-auto flex flex-col lg:flex-row items-center gap-12">
        <!-- Content -->
        <div class="overflow-hidden heroArea">
            <h2 class="slideUp heroTitle">
                Learn. Cook. Enjoy.<br />
                <p>Chef's Kitchen</p>
            </h2>

            <div class="overflow-hidden">
                <p class="font-thin text-xl md:text-1xl text-center lg:text-left slideUp slogan">
                    cooking is not a job, it's a lifestyle...
                </p>
            </div>
            <div class="flex mx-auto md:mx-40 mt-6 justify-center flex-wrap gap-6">
                <a href="#search-dish-call">
                    <button type="button"
                        class="bg-green-600 hover:bg-green-700 text-white text-xl font-regular py-2 px-4 rounded transition duration-500 ease-in-out bg-green-600 hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110 ... hero-btn">
                        Browse Dish
                    </button>
                </a>
            </div>
        </div>
        <!-- Hero Image -->
        <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10">
            <img class="heroImage w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full fadeInRotate"
                src="{{ asset('../images/hero-dish.png') }}" src="../images/hero-dish.png" alt="" />
        </div>
    </div>
    <!-- Rounded Rectangle -->
    <div class="
			hidden
			md:block
			overflow-hidden
			bg-bookmark-purple
			rounded-l-full
			absolute
			h-80
			w-2/4
			top-32
			right-0
			lg:
			-bottom-28
			lg:-right-0
		  "></div>
</section>







<!-- ##### Top Catagory Area Start ##### -->
<section class="top-catagory-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <!-- Top Catagory Area -->
            <div class="col-12 col-lg-6">
                <div class="single-top-catagory">
                    <img src="{{ asset('../images/bg2.jpg') }}" alt="">
                    <!-- Content -->
                    <div class="top-cta-content">
                        <h3>Strawberry Cake</h3>
                        <h6>Simple &amp; Delicios</h6>
                        <a href="receipe-post.html" class="chef-btn">See Full Receipe</a>
                    </div>
                </div>
            </div>
            <!-- Top Catagory Area -->
            <div class="col-12 col-lg-6">
                <div class="single-top-catagory">
                    <img src="{{ asset('../images/bg3.jpg') }}" alt="">
                    <!-- Content -->
                    <div class="top-cta-content">
                        <h3>Chinesse Noodles</h3>
                        <h6>Simple &amp; Delicios</h6>
                        <a href="receipe-post.html" class="chef-btn">See Full Receipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Top Catagory Area End ##### -->

<!-- ##### Best Receipe Area Start ##### -->
<section class="best-receipe-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>The Best Recipes</h3>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- <div class="containerCheck"> -->
            @foreach($recipesAll as $value)
            <!-- <div class="itemCheck"> -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-best-receipe-area mb-30">
                    <img src="{{asset('storage/'.$value->recipe_photo)}}" alt="">
                    <div class="receipe-content">
                        <a href="receipe-post.html">
                            <h5>{{$value->recipe_name}}</h5>
                            <button class="chef-btn">View Recipe</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            @endforeach
            <!-- </div> -->
        </div>


    </div>

</section>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### VEG Area Start ##### -->
<section class="veg-area bg-img bg-overlay" style="background-image: url('../images/bg4.jpg');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- veg Content -->
                <div class="veg-content text-center">
                    <h2>Veg Recipes</h2>
                    <p>A vegetarian diet does not include any meat, poultry, or seafood. It is a meal plan made up of
                        foods that come mostly from plants. A well-planned vegetarian diet can meet your nutrition
                        needs. Reducing the amount of meat in your diet may improve your health.</p>
                    <a href="#" class="chef-btn">Discover veg dishes</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### VEG Area End ##### -->

<!-- ##### Quotes Area Start ##### -->
<section class="quoteArea">
    <div class="quote-item">
        <div class="quote-area text-center">
            <h4><q>A recipe has no soul. You as the cook must bring soul to the recipe.</q></h4>
            <p>- Thomas Keller</p>
        </div>
    </div>
    <div class="quote-item">
        <div class="quote-area text-center">
            <h4><q>Cooking is like love. It should be entered into with abandon or not at all.</q></h4>
            <p>- Harriet Van Horne</p>
        </div>
    </div>
</section>
<!-- ##### Quotes Area End ##### -->

@endsection