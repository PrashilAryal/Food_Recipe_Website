@extends('layout.main')

@section('content')
<section class="editRecipeSection">
    <div class="editRecipeContainer">
        <form action="{{route('update_recipe')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="editRecipeForm" id="editRecipeForm">
                <h2>Edit Recipe</h2>
                <div class="editRecipeFormBox">
                    <div class="editRecipeInputBox w50">
                        <input type="hidden" name="id" id="recipe_id" value="{{$data->id}}" autocomplete="off" required>
                    </div>
                    <div class="editRecipeInputBox w50">
                        <input type="text" name="recipe_name" id="recipe_name" value="{{$data->recipe_name}}"
                            autocomplete="off" required>
                        <span>Dish Name</span>
                    </div>
                    <div class="editRecipeInputBox w50">
                        <input type="text" name="recipe_cooking_time" id="recipe_cooking_time"
                            value="{{$data->recipe_cooking_time}}" autocomplete="off" required>
                        <span>Time to cook</span>
                    </div>
                    <div class="editRecipeInputBox w50">
                        <input type="text" name="recipe_ingredients" id="recipe_ingredients"
                            value="{{$data->recipe_ingredients}}" autocomplete="off" required>
                        <span>Ingredients required</span>
                    </div>
                    <div class="editRecipeInputBox w50">
                        <textarea type="text" name="recipe_description" id="recipe_description"
                            value="{{$data->recipe_description}}" autocomplete="off"
                            required>{{$data->recipe_description}}</textarea>
                        <span>About the dish...</span>
                    </div>
                    <div class="editRecipeInputBox w50">
                        <textarea name="recipe_steps" id="recipe_steps" value="{{$data->recipe_steps}}"
                            autocomplete="off" required>{{$data->recipe_steps}}</textarea>
                        <span>Steps to cook the dish</span>
                    </div>
                    <div class="editRecipeInputBox w50">
                        @php
                        if($data->recipe_type == 'veg'){
                        $dishType="Veg";
                        @endphp
                        <select name="recipe_type" class="select-field" required>
                            <option value="{{$data->recipe_type}}" selected>{{$dishType}}</option>
                            <option value="non_veg">Non-veg</option>
                        </select>
                        @php
                        }else{
                        $dishType="Non-veg";
                        @endphp
                        <select name="recipe_type" class="select-field" required>
                            <option value="{{$data->recipe_type}}" selected>{{$dishType}}</option>
                            <option value="veg">Veg</option>
                        </select>
                        @php
                        }
                        @endphp

                        <span>Choose dish type</span>

                    </div>
                    <div class="editRecipeInputBox w50">
                        <div class="editRecipeButton">
                            <input type="submit" id="editRecipe_btn" value="Update">
                        </div>
                    </div>
                </div>
        </form>
    </div>

    </div>
</section>

@endsection