<?php

use App\Http\Controllers\IamRestaurant;
use App\Http\Controllers\RecentallViewRestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SearchRecipeController;
use App\Http\Controllers\SearchRestaurantController;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cookfood', function () {
    return view('CookFood');
});

Route::get('/searching_restaurant', function (){

    $popularRestaurants = Restaurant::latest()->take(5)->get();

    return view ('Searchingrestaurant', [
        'popular_restaurants'   => $popularRestaurants,
    ]);
});
//me
// Route::get('/searching_recent_restaurant', function (){

//     $recentlyviewedrestaurants = Restaurant::latest()->take(5)->get();

//     return view ('Searchingrestaurant', [
//         'recentlyviewedrestaurants'   => $recentlyviewedrestaurants,
//     ]);
// });

Route::get('/recipe-details', function (){
    return view ('RecipeDetails');
});
Route::get('/food', function (){
    return view('food');
});
Route::get('/interior', function (){
    return view('interior');
});
Route::get('/exterior', function (){
    return view('exterior');
});
Route::get('/completereservation', function (){
    return view('completereservation');
});


Route::get('/CookFood',function (){
    return view('CookFood');
});



Route::get('iamrestaurant-login',function(){
    return view('iamrestaurant.login');
})->name('iamrestaurant-login');

Route::get('iamrestaurant-reg',function(){
    return view('iamrestaurant.reg');
})->name('iamrestaurant-reg');


Route::get('search',[SearchRestaurantController::class,'sr']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//search CookFood
Route::get('/search', [SearchRecipeController::class, 'index'])->name('search');
Route::get('recipes/create', [SearchRecipeController::class, 'create'])->name('recipes.create');
Route::post('recipes', [SearchRecipeController::class, 'store'])->name('recipes.store');

//search restaurants
Route::get('/searchrestaurant', [RestaurantController::class, 'index'])->name('searchrestaurant');
Route::get('restaurants/create', [RestaurantController::class, 'create'])->name('restaurants.create');
Route::post('restaurants', [RestaurantController::class, 'store'])->name('restaurants.store');

//recentlyviewedrestaurant
Route::get('/recentallrestaurants', [App\Http\Controllers\RecentallViewRestaurantController::class, 'show'])->name('restaurants.recentlyviewed');

//popularviewedrestaurant
Route::get('/popularallrestaurants', [App\Http\Controllers\PopularallViewRestaurantController::class, 'show'])->name('restaurants.popularrestaurant');


Route::get('restaurants/{restaurant}', [RestaurantController::class, 'show'])->name('restaurants.show');
