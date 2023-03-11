@extends('layout.main')
@section('content')



<div class="bradcam_area  overlay" style="background-image : url('{{asset('img/recipe/cookme.jpg')}}');">

</div>
<div class="recipe_area plus_padding mt-5">
    <div class="container">
        <div class="row">
            @foreach($Recipes as $recipe)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_recipe text-center mb-20">
                    <div class="recipe_thumb">
                        <div class="recipeImage">
                            <img style="object-fit:cover" src="{{asset('storage/' . $recipe->recipe_photo)}}" alt="">
                            <!-- <img src="img/recipe/sandn.jpg" alt=""> -->
                        </div>
                    </div>
                    <h3>{{$recipe->recipe_name}}</h3>
                    <p>{{$recipe->recipe_type}}</p>
                    <a href="{{url('ViewRecipe/' . $recipe->id)}}" class="btn btn-outline-secondary"> View Full
                        Recipe</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection