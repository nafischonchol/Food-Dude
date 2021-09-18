<?php

use App\Http\Controllers\RecentallViewRestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SearchRecipeController;
use App\Http\Controllers\SearchRestaurantController;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IamRestaurant;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\YourTableController;
use App\Http\Controllers\GalleryController;


//iamresturant
Route::get('iamrestaurant-login',function(){
    return view('iamrestaurant.login');
})->name('iamrestaurant-login');
Route::post('iamrestaurant-login',[IamRestaurant::class,'login'])->name('iamrestaurant-login');

Route::get('iamrestaurant-reg',function(){
    return view('iamrestaurant.reg');
})->name('iamrestaurant-reg');
Route::post('iamrestaurant-reg',[IamRestaurant::class,'createResturant'])->name('iamrestaurant-reg');

//without login, can't access these route
Route::group(['middleware'=>['resturantLogin']],function()
{

    Route::get('edit-resturant',[IamRestaurant::class,'editForm'])->name('edit-resturant');
    Route::post('iamrestaurant-update',[IamRestaurant::class,'updateResturnat'])->name('iamrestaurant-update');
    
    Route::get('mainmenu',function(){
        return redirect('your-table');
    })->name('mainmenu');
    
    Route::get('orders',[OrderController::class,'orderShow'])->name('orders');
    Route::get('your-table',[YourTableController::class,'index'])->name('your-table');

    Route::get('create-table',function(){
        return view('iamrestaurant.your-table.create-table');
    })->name('create-table');
    Route::Post('create-table',[YourTableController::class,'create'])->name('create-table');
    Route::get('your-table-edit/{id}',[YourTableController::class,'editForm'])->name('your-table-edit');
    Route::post('table-edit',[YourTableController::class,'edit'])->name('table-edit');

    Route::get('show-galleries',[GalleryController::class,'index'])->name('show-galleries');
    
    Route::get('resturant-profile',[IamRestaurant::class,'resturantProfile'])->name('resturant-profile');

    Route::get('resturant-logout',[IamRestaurant::class,'logout'])->name('resturant-logout');
});

Route::get('/searching_restaurant', function (){

    $popularRestaurants = Restaurant::latest()->take(5)->get();

    return view ('searching.searching_res', ['popular_restaurants'=>$popularRestaurants,]);
});
Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/search_restaurant', [SearchRestaurantController::class, 'search'])->name('search_restaurant');
Route::get('completereservation/{res_id}/{hour}',[SearchRestaurantController::class,'com_reservation'])->name('completereservation');

Route::post('create-order',[OrderController::class,'createOrder'])->name('create-order');






Route::get('/cookfood', function () {
    return view('CookFood');
});

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



Route::get('/CookFood',function (){
    return view('CookFood');
});





Route::get('search',[SearchRestaurantController::class,'sr']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//search CookFood
Route::get('/search', [SearchRecipeController::class, 'index'])->name('search');
Route::get('recipes/create', [SearchRecipeController::class, 'create'])->name('recipes.create');
Route::post('recipes', [SearchRecipeController::class, 'store'])->name('recipes.store');

//search restaurants

Route::get('restaurants/create', [RestaurantController::class, 'create'])->name('restaurants.create');
Route::post('restaurants', [RestaurantController::class, 'store'])->name('restaurants.store');

//recentlyviewedrestaurant
Route::get('/recentallrestaurants', [App\Http\Controllers\RecentallViewRestaurantController::class, 'show'])->name('restaurants.recentlyviewed');

//popularviewedrestaurant
Route::get('/popularallrestaurants', [App\Http\Controllers\PopularallViewRestaurantController::class, 'show'])->name('restaurants.popularrestaurant');


Route::get('restaurants/{restaurant}', [RestaurantController::class, 'show'])->name('restaurants.show');
