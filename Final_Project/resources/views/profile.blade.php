@extends('layout.main')

@section('content')
<div class="cookProfile">
    <div class="profilePhotos">
        <!-- <img id="coverPhoto" src="{{ asset('../images/bg2.jpg') }}" alt=""> -->
        <img id="coverPhoto" src="{{asset('storage/'.$data->chef_cover_photo)}}" alt="">




        <div class="profile">
            <img id="profilePhoto" src="{{asset('storage/'.$data->chef_profile_photo)}}" alt="">
            <span>{{$data->chef_name}}<br>
                {{$data->chef_address}}</span>

        </div>
    </div>

    <div class="profileContainer">
        <div class="profileSettings">
            <button id="settingBtn" class="setting-btn">Edit Profile</button>
            <button id="addRecipeBtn" class="setting-btn">Add Recipe</button>
            <div class="otherDetails">
                <h3>Personal Info.</h3>
                <ul>
                    <li>{{$data->chef_name}}</li>
                    <li>{{$data->chef_email}}</li>
                    <li>{{$data->chef_address}}</li>
                    <li>Total recipes: {{$data->chef_total_recipes}}</li>
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
                        <br><br>
                        <label for="" style="color:black;">Dish Photo</label>
                        <div class="editInputBox w50">
                            <input type="file" name="recipe_photo" id="recipe_photo" autocomplete="off" required>
                        </div>
                        <!-- <input type="text" name="recipe_name" placeholder="Dish Name"
                            class="@error ('recipe_type') is-invalid @enderror" /> -->
                        <!-- <span style="color:red;">@error ('recipe_name') {{$message}} @enderror</span> -->
                        <div class="editInputBox w50">
                            <input type="text" name="recipe_name" id="recipe_name" autocomplete="off" required>
                            <span>Dish Name</span>
                        </div>
                        <div class="editInputBox w50">
                            <input type="text" name="recipe_cooking_time" id="recipe_cooking_time" autocomplete="off"
                                required>
                            <span>Time to cook</span>
                        </div>
                        <div class="editInputBox w50">
                            <input type="text" name="recipe_ingredients" id="recipe_ingredients" autocomplete="off"
                                required>
                            <span>Ingredients required</span>
                        </div>
                        <div class="editInputBox w50">
                            <textarea name="recipe_description" id="recipe_description" autocomplete="off"
                                required></textarea>
                            <span>About the dish...</span>
                        </div>
                        <div class="editInputBox w50">
                            <textarea name="recipe_steps" id="recipe_steps" autocomplete="off" required></textarea>
                            <span>Steps to cook the dish...</span>
                        </div>
                        <div class="editInputBox w50">
                            <input type="hidden" name="chef_id" id="chef_id" value="{{$data->id}}" autocomplete="off"
                                required>
                            <!-- <span>Chef ID</span> -->
                        </div>
                        <div>
                            <input type="submit" value="Add Recipe" class="chef-btn" />
                        </div>
                    </form>
                </div>
                <div class="editProfileForm" id="editProfileForm">
                    <h1>Edit Profile</h1>
                    <form action="{{route('update_chef')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="editInputBox w50">
                            <input type="hidden" name="id" id="chef_name" value="{{$data->id}}" autocomplete="off"
                                required>
                            <span>ID</span>
                        </div>
                        <div class="editInputBox w50">
                            <input type="text" name="chef_name" id="chef_name" value="{{$data->chef_name}}"
                                autocomplete="off" required>
                            <span>Your Name</span>
                        </div>
                        <div class="editInputBox w50">
                            <input type="email" name="chef_email" id="chef_email" value="{{$data->chef_email}}"
                                autocomplete="off" required>
                            <span>Email</span>
                        </div>
                        <div class="editInputBox w50">
                            <input type="text" name="chef_password" id="chef_password" value="{{$password}}"
                                autocomplete="off" required>
                            <span>Password</span>
                        </div>
                        <div class="editInputBox w50">
                            <input type="text" name="chef_phone_num" id="chef_phone_num"
                                value="{{$data->chef_phone_num}}" autocomplete="off" required>
                            <span>Phone Number</span>
                        </div>
                        <div class="editInputBox w50">
                            <input type="text" name="chef_address" id="chef_address" value="{{$data->chef_address}}"
                                autocomplete="off" required>
                            <span>Address</span>
                        </div>
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
            <?php
                $servername = "localhost:3306";
                $username = "root";
                $password = "";
                $dbname = "chefs_kitchen";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error){
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, recipe_name,recipe_photo, recipe_ingredients, recipe_description FROM recipes WHERE chef_id = $data->id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
            ?>
            <div class="post_box" style="border:1px solid green;">
                <div class="post_img" style="height: 500px; width:100%;">
                    <!-- <img src="{{ asset('../images/r6.jpg') }}" alt=""> -->
                    <img src="{{asset('storage/'.$row["recipe_photo"])}}" alt="">
                </div>
                <div class="post_text">
                    <!-- <span>18 July 2021 / Breakfast</span> -->
                    <div class="recipeAction">
                        <a href="{{url('/edit-recipe/'.$row['id'])}}">Edit</a>
                        <a href="{{url('/delete-recipe/'.$row['id'])}}">Delete</a>
                    </div>
                    <span>
                        <h2>{{$row["recipe_name"]}}<h2>
                    </span>
                    <!-- <a href="#" class="post_title">Click here to view full recipe</a> -->
                    <!-- <p>Ingredients: {{$row["recipe_ingredients"]}}</p> -->
                    <h5>{{$row["recipe_description"]}}</h5>
                    <a href="{{url('ViewRecipe/' . $row["id"])}}">Read More...</a>
                </div>
            </div>
            <?php
                    }
                }
                $conn->close();
            ?>
        </div>

    </section>
    <script type="text/javascript">
    const settingBtn = document.getElementById('settingBtn');
    const addRecipeBtn = document.getElementById('addRecipeBtn');

    const edit = document.getElementById('editProfileForm');
    const recipe = document.getElementById('addRecipeForm');
    settingBtn.addEventListener('click', () => {

        if (edit.style.display === 'none') {
            edit.style.display = 'block';
            recipe.style.display = 'none';
            settingBtn.style.backgroundColor = 'green';
            settingBtn.style.color = 'white';
            addRecipeBtn.style.backgroundColor = '#eef2e6';
            addRecipeBtn.style.color = 'green';

        } else {
            edit.style.display = 'none';
            settingBtn.style.backgroundColor = '#eef2e6';
            settingBtn.style.color = 'green';
        }
    });
    addRecipeBtn.addEventListener('click', () => {

        if (recipe.style.display === 'none') {
            recipe.style.display = 'block';
            edit.style.display = 'none';
            addRecipeBtn.style.backgroundColor = 'green';
            addRecipeBtn.style.color = 'white';
            settingBtn.style.backgroundColor = '#eef2e6';
            settingBtn.style.color = 'green';

        } else {
            recipe.style.display = 'none';
            addRecipeBtn.style.backgroundColor = '#eef2e6';
            addRecipeBtn.style.color = 'green';
        }
    });
    </script>

    @endsection