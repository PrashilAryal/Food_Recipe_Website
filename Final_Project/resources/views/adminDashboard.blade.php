@extends('adminpanel')

@section('adminContent')

<?php
$chefCount=0;
$adminCount=0;
$vegCount=0;
$nonVegCount=0;
foreach($recipes as $recipe){
    if($recipe->recipe_type=='veg'){
        $vegCount++;
    }else{
        $nonVegCount++;
    }
}
foreach($chefs as $chef){
    if($chef->chef_role=='chef'){
        $chefCount++;
    }else{
        $adminCount++;
    }
}


?>
<div class="recentorders">
    <div class="cardHeader">
        <h2>Dashboard</h2>
    </div>
    <div class="dashboardCards">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p>{{$chefCount}}</p>
                    <h3>Chefs</h3>
                </div>
                <div class="flip-card-back">
                    <p>This card shows the total number of chefs in Chef's Kitchen.</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="recipesCount">
                        <div class="recipeCount">
                            <p>{{$nonVegCount}}</p>
                            <h5>Non-veg</h5>
                        </div>
                        <div class="recipeCount">
                            <p>{{$vegCount}}</p>
                            <h5>Veg</h5>
                        </div>
                    </div>
                    <h3 class="cardRecipes">Recipes</h3>
                </div>
                <div class="flip-card-back">
                    <p>This card shows the total number of Veg and Non-veg recipes in Chef's Kitchen.</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p>{{$adminCount}}</p>
                    <h3>Admins</h3>
                </div>
                <div class="flip-card-back">
                    <p>This card shows the total number of admins in Chef's Kitchen.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection