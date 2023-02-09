<?php

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

Route::post('/save-recipe', [RecipeController::class, 'save_recipe'])->name('save_recipe');