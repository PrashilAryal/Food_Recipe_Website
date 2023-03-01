@extends('layout.main')
@section('content')


        
<div class="bradcam_area breadcam_bg_1 overlay" style="background-image: url('{{asset('img/recipe/viewreci.jpg')}}');">
</div>    


   
<div class="container">
            <div class="row">
                <div class="col-lg-5">
                
                         <div class="intro-item">
                            <img src="img/recipe/viewr.jpg" alt="">
                             </div> 
                            
                             <div class="Time">
                            <h5>Time</h5>
                            <p>{{$RecipesDetails->recipe_cooking_time}}</p>
                            
                         </div> 
                          
                        
                        <div class="ingredient-list">
                            <h5>Ingredients</h5>
                            {{$RecipesDetails->recipe_ingredients}}
                            
                         </div>
                        
                 </div>    
               
                                    
            <div class="col-lg-7">
                    <div class="recipe-right">
                        
                    <div class="Description">
                            <h3>Description</h3>
                            <p>{{$RecipesDetails->recipe_description}}</p>
                         
                        </div>
                       
                        <div class="instruction-list">
                            <h3>Instruction</h3>
                            <p>{{$RecipesDetails->recipe_steps}}</p>
                            
                               
                         </div>
                                           
                        
                           <!-- <div class="notes">
                               <h3>About</h3>
                               <p>{{$RecipesDetails->recipe_step
                          </div> -->
                    </div>
                </div>
        </div> 

        @endsection
    

      