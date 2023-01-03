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
                src="{{ asset('../image/hero-dish.png') }}" src="../image/hero-dish.png" alt="" />
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
			lg:-right-36
		  "></div>
</section>

@endsection