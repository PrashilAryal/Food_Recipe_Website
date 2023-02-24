@extends('layout.main')
@section('content')


        
<div class="bradcam_area breadcam_bg_1 overlay" style="background-image: url('{{asset('img/recipe/sandt.jpeg')}}');">
</div>    
   
<div class="container">
            <div class="row">
                <div class="col-lg-5">
                <div class="ingredients-item">
                        <div class="intro-item">
                            <img src="img/recipe/viewr.jpg" alt="">
                             </div>
                            
                            <div class="recipe-time">
                                <ul>
                                    <li>Prep time: <span>8 min</span></li>
                                    <li>Cook time: <span>8 min</span></li>
                                    <li>Total time: <span>16 min</span></li>
                                    
                                </ul>
                            </div>
                        
                        <div class="ingredient-list">
                            <h5>Ingredients</h5>
                                <div class="salad-list">
                                    
                                    <ul>
                                        <li>bread</li>
                                        <li>meat</li>
                                        <li>cheese</li>
                                        <li>salad</li>
                                        <li>vegetables</li>
                                        <li>sauce or savoury spread</li>
                                        
                                    </ul>
                              </div>
                        </div>
                    </div>
                    <div class="nutrition-fact">
                    <div class="nutri-title">
                            <h6>Nutrition Facts</h6>
                            
                        </div>
                        <ul>
                            <li>Total Fat : 31g</li>
                            <li>Protein: 32g</li>
                            <li>Chalories: 531</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        
                            <h3>Description</h3>
                            <p>{{$RecipesDetails->recipe_description}}</p>
                            
                        
                        <div class="instruction-list">
                            <h3>Instructions</h3>

                               <ol>
                                   <li> <p>01. Combine shredded chicken, buffalo wing sauce, and blue cheese in a small bowl.</p> </li>
                                       <li><p> 02. Preheat a small skillet over medium heat.</p></li>
                                           <li><p> 03. Spread 1/2 tablespoon butter on one side of a slice of bread. Place bread butter-side-down onto the skillet bottom and place pepper Jack cheese on top. Top with chicken mixture.
                                           Butter a second slice of bread with remaining butter on one side and place on top of sandwich, butter-side-up.</p></li>
                                          <li><p> 04. Cook sandwich in skillet until lightly browned bread and flip over; about 2 1/2 minutes per side.</p></li>
                                           
                                        </div>
                                           
                        </div>
                        <div class="notes">
                            <h3>Notes</h3>
                            <div class="notes-item">
                                
                                <p>There is no added salt to this recipe, since cooked chicken, and especially rotisserie chicken from the grocery, usually contains salt. Add salt to taste, 
                                    if you are using unsalted, cooked chicken.

                                    I used buttered and garlic-flavored Texas toast. If using plain Texas Toast,
                                    spread softened butter on one side of each slice before filling the sandwich. Buttered sides should be on the outside of the sandwich.

                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
    

      