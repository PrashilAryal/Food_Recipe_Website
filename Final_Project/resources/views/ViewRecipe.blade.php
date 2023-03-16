@extends('layout.main')
@section('content')

<div class="recipeHeadContainer">
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="viewRecipeImage">
                <img src="{{asset('storage/'.$RecipesDetails->recipe_photo)}}" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="Description">
                <h5>Description</h5>
                <p>{{$RecipesDetails->recipe_description}}</p>
            </div>
            <div class="Time">
                <h5>Cooking Time</h5>
                <p>{{$RecipesDetails->recipe_cooking_time}}</p>
            </div>
            <div class="ingredient-list">
                <h5>Ingredients</h5>
                {{$RecipesDetails->recipe_ingredients}}
            </div>
            @php
            $chefId = $RecipesDetails->chef_id;
            $chefData = DB::table('chefs')->where('id', $chefId)->first();
            @endphp
            <div class="chefName">
                <h5>Recipe By</h5>
                {{$chefData->chef_name}}
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="recipe-right">

                <div class="instruction-list">
                    <h3>Cooking Instruction</h3>
                    <!-- <p>{{$RecipesDetails->recipe_steps}}</p> -->
                    <?php
                    $sentences = explode(".", $RecipesDetails->recipe_steps);
                    echo "<div class='paragraph'>";
                    echo "<ol class='recipeStepsStyle' role='list'>";
                    foreach($sentences as $sentence){
                        echo "<li>" .trim($sentence)."</li>";
                    }
                    echo "</ol>";
                    $i=1;
                    echo "</div>";
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
function loadParagraph() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("paragraph").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "get_paragraph.php", true);
    xhttp.send();
}
</script>

@endsection