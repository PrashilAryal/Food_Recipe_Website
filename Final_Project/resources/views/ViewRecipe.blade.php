@extends('layout.main')
@section('content')



<!-- <div class="bradcam_area breadcam_bg_1 overlay" style="background-image: url('{{asset('img/recipe/viewreci.jpg')}}');"> -->
<div class="bradcam_area breadcam_bg_1 overlay"
    style="background-image: url('{{asset('storage/'.$RecipesDetails->recipe_photo)}}');">
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-5">

            <!-- <div class="intro-item">
                <img src="img/recipe/viewr.jpg" alt="">
            </div> -->

            <div class="Time">
                <h5>Time</h5>
                <p>{{$RecipesDetails->recipe_cooking_time}}</p>
            </div>


            <div class="ingredient-list">
                <h5>Ingredients</h5>
                {{$RecipesDetails->recipe_ingredients}}
            </div>

            <div class="Description">
                <h5>Description</h5>
                <p>{{$RecipesDetails->recipe_description}}</p>
            </div>
        </div>


        <div class="col-lg-7">
            <div class="recipe-right">

                <div class="instruction-list">
                    <h3>Steps</h3>
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