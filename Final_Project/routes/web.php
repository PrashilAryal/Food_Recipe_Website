<?php

use App\Http\Controllers\ChefController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

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


Route::post('/save-recipe', [RecipeController::class, 'save_recipe'])->name('save_recipe');

Route::get('edit/{id}', [ChefController::class, 'edit']);
Route::post('/update-chef', [ChefController::class, 'update_chef'])->name('update_chef');

Route::post('/register-chef', [ChefController::class, 'register_chef'])->name('register_chef');
Route::get('/contact-us', [HomeController::class, 'contactPage'])->name('contactPage');
Route::post('/login-chef', [ChefController::class,'login_chef'])->name('login_chef');