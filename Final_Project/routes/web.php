<?php

use App\Http\Controllers\ChefController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/profile',[HomeController::class, 'profile'])->name('profile');
Route::get('/about',[HomeController::class, 'about'])->name('AboutPage');
Route::get('/recipe',[HomeController::class, 'recipe'])->name('recipePage');
Route::get('/ViewRecipe/{recipeid}',[HomeController::class, 'ViewRecipe'])->name('ViewRecipe');
Route::get('/mainlogin',[HomeController::class, 'mainlogin'])->name('mainlogin');
Route::get('/adminlogin', [HomeController::class, 'adminlogin'])->name('adminlogin');
Route::get('/adminpanel', [HomeController::class, 'adminpanel'])->name('adminpanel');



Route::post('/save-recipe', [RecipeController::class, 'save_recipe'])->name('save_recipe');

Route::get('edit/{id}', [ChefController::class, 'edit']);
Route::post('/update-chef', [ChefController::class, 'update_chef'])->name('update_chef');
Route::get('/delete/{id}', [ChefController::class,'deldata']);
Route::get('/delete-recipe/{id}', [RecipeController::class,'delete_recipe']);
Route::get('/edit-recipe/{id}', [HomeController::class,'edit_recipe'])->name('edit_recipe');
Route::post('/update-recipe', [RecipeController::class,'update_recipe'])->name('update_recipe');


Route::post('/register-chef', [ChefController::class, 'register_chef'])->name('register_chef');
Route::get('/contact-us', [HomeController::class, 'contactPage'])->name('contactPage');
Route::post('/login-chef', [ChefController::class,'login_chef'])->name('login_chef');
Route::post('/login-admin', [AdminController::class,'login_admin'])->name('login_admin');
// Route::get('/getchef', [ChefController::class, 'getchef']);

Route::get('/search', [ChefController::class,'search']);
Route::get('/recipesearch', [RecipeController::class,'recipesearch'])->name('recipesearch');
Route::get('/logout', [ChefController::class,'logout'])->name('logout');
Route::get('/logout-admin', [AdminController::class,'logoutAdmin']);

Route::post('/send-message', [MessageController::class, 'send_message'])->name('send_message');
Route::get('/view-message', [MessageController::class, 'view_message']);
Route::get('/view-chef', [AdminController::class, 'view_chef']);