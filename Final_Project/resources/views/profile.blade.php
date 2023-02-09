@extends('layout.main')

@section('content')
<div class="cookProfile">
    <div class="profilePhotos">
        <img id="coverPhoto" src="{{ asset('../images/bg2.jpg') }}" alt="">
        <div class="profile">
            <img id="profilePhoto" src="{{ asset('../images/bg2.jpg') }}" alt="">
            <span>Name <br>
                Address</span>
        </div>
    </div>

    <div class="profileContainer">
        <div class="profileSettings">
            <button id="settingBtn" class="setting-btn">Edit Profile</button>
            <div class="otherDetails">
                <h3>Personal Info.</h3>
                <ul>
                    <li>Name:</li>
                    <li>Email:</li>
                    <li>Address:</li>
                    <li>Total recipes: </li>
                </ul>
            </div>
        </div>
        <div class="profileBody">
            <div class="addRecipe">
                <div class="addRecipeForm" id="addRecipeForm">
                    <h1>Add Recipe</h1>
                    <form action="{{route('save_recipe')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <select name="recipe_type" class="select-field">
                            <option value="" disabled selected>Choose dish type</option>
                            <option value="non_veg">Non-veg</option>
                            <option value="veg">Veg</option>
                        </select>
                        <label for="">Dish Photo</label>
                        <input type="file" name="recipe_photo" placeholder="Choose dish photo" />
                        <input type="text" name="recipe_name" placeholder="Dish Name"
                            class="@error ('recipe_type') is-invalid @enderror" />
                        <span style="color:red;">@error ('recipe_name') {{$message}} @enderror</span>
                        <input type="text" name="recipe_cooking_time" placeholder="Time to cook" />
                        <input type="text" name="recipe_ingredients" placeholder="Ingredients required" />
                        <textarea name="recipe_description" placeholder="About the dish"></textarea>
                        <textarea name="recipe_steps" placeholder="Steps to cook the dish"></textarea>
                        <div>
                            <input type="submit" value="Add Recipe" class="chef-btn" />
                        </div>
                    </form>
                </div>
                <div class="editProfileForm" id="editProfileForm">
                    <h1>Edit Profile</h1>
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="chef_name" placeholder="Your Name" />
                        <label for="">Profile Photo</label>
                        <input type="file" name="chef_profile_photo" placeholder="Choose your profile photo" />
                        <label for="">Cover Photo</label>
                        <input type="file" name="chef_cover_photo" placeholder="Choose your cover photo" />
                        <input type="email" name="chef_email" placeholder="Email" />
                        <input type="text" name="chef_password" placeholder="Password" />
                        <input type="text" name="chef_phone_no" placeholder="Phone number" />
                        <input type="text" name="chef_address" placeholder="Your address" />
                        <div>
                            <input type="submit" value="Save" class="chef-btn" />
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <section class="oldRecord">
        <div class="post_heading">
            <span>My Recent Posts</span>
            <h3>My Recipes</h3>
        </div>
        <div class="post_container">
            <div class="post_box">
                <div class="post_img">
                    <img src="{{ asset('../images/r6.jpg') }}" alt="">
                </div>
                <div class="post_text">
                    <span>18 July 2021 / Breakfast</span>
                    <a href="#" class="post_title">Click here to view full recipe</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio suscipit voluptas
                        quisquam deleniti ducimus placeat reiciendis doloribus a alias impedit facilis porro
                        nemo tempore quam, accusamus odio vitae? Officia, voluptatum.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

    </section>
    <script type="text/javascript">
    const settingBtn = document.getElementById('settingBtn');
    settingBtn.addEventListener('click', () => {
        const edit = document.getElementById('editProfileForm');
        const recipe = document.getElementById('addRecipeForm');

        if (edit.style.display === 'none') {
            edit.style.display = 'block';
            recipe.style.display = 'none';
            settingBtn.innerHTML = 'Add Recipe';

        } else {
            edit.style.display = 'none';
            recipe.style.display = 'block';
            settingBtn.innerHTML = 'Edit Profile';
        }
    });
    </script>

    @endsection