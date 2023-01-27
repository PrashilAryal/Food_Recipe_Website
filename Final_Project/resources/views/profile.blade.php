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
            <p>Edit profile</p>
        </div>
        <div class="profileBody">
            <div class="addRecipe">
                <form action="" method="">
                    <label for="">Dish Name</label>
                    <input type="text" name="name"><br>
                    <label for="">Photo</label>
                    <input type="text" name="photo"><br>
                    <label for="">Ingredients</label>
                    <input type="text" name="ingredients"><br>
                    <label for="">Description</label>
                    <input type="text" name="description"><br>
                    <label for="">Time to cook</label>
                    <input type="text" name="cooking_time"><br>
                    <button type="submit">Add Recipe</button>
                </form>

            </div>
            <div class="oldRecord">

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
</div>
@endsection