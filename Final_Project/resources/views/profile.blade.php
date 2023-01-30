@extends('layout.main')

@section('content')
<div class="cookProfile">
    <div class="profilePhotos">
        <img id="coverPhoto" src="{{ asset('../image/bg2.jpg') }}" alt="">
        <div class="profile">
            <img id="profilePhoto" src="{{ asset('../image/bg2.jpg') }}" alt="">
            <span>Name <br>
                Address</span>
        </div>
    </div>

    <div class="profileContainer">
        <div class="profileSettings">
            <p>Settings</p>
            <p>You can edit:</p>
            <ul>
                <li>Name</li>
                <li>Password</li>
                <li>Email</li>
                <li>Location</li>
            </ul>
        </div>
        <div class="profileBody">
            <div class="addRecipe">
                <form>
                    <div class="add_recipe_form">
                        <div class="add_recipe_form-heading">Add a recipe</div>
                        <form action="" method="post">
                            <label><span>Dish Name </span><input type="text" class="input-field" name="dish_name"
                                    placeholder="Enter dish name" /></label>
                            <label><span>Photo </span><input type="file" class="input-field"
                                    name="dish_photo" /></label>
                            <label><span>Ingredients </span><input type="text" class="input-field" name="ingredients"
                                    placeholder="Enter ingredients needed" /></label>
                            <label><span>Time to cook </span><input type="text" class="input-field" name="cooking_time"
                                    placeholder="Enter average time to cook" /></label>
                            <label><span>Category</span><select name="category" class="select-field">
                                    <option value="" disabled selected>Choose dish type</option>
                                    <option value="non_veg">Non-veg</option>
                                    <option value="veg">Veg</option>
                                </select></label>
                            <label><span>Description </span><textarea name="description" class="textarea-field"
                                    placeholder="Enter way to cook"></textarea></label>
                            <button class="chef-btn">Add Recipe</button>
                        </form>

                    </div>
                    <div class="oldRecord">

                    </div>
            </div>
        </div>
        <div class="otherDetails">
            <h3>Personal Info.</h3>
            <ul>
                <li>Name:</li>
                <li>Email:</li>
                <li>Address:</li>

            </ul>
            <h3>Extra</h3>
            <ul>
                <li>Recipe: </li>
                <li></li>
            </ul>
        </div>
    </div>
    @endsection