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
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\RecipeController;






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

    Route::get('show-admin-manu', [MenuController::class, 'showAdminMenu'])->name('show-admin-manu');
    Route::get('admin-menu-form', [MenuController::class, 'formPage'])->name('admin-menu-form');

    Route::post('create-admin-menu', [MenuController::class, 'create'])->name('create-admin-menu');

    Route::get('show-galleries',[GalleryController::class,'index'])->name('show-galleries');
    Route::get('from-gallery',[GalleryController::class,'from'])->name('from-gallery');
    Route::POST('create-admin-gallery',[GalleryController::class,'save'])->name('create-admin-gallery');

   
    
    Route::get('resturant-profile',[IamRestaurant::class,'resturantProfile'])->name('resturant-profile');

    Route::get('resturant-logout',[IamRestaurant::class,'logout'])->name('resturant-logout');
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax'])->name('pay-via-ajax');

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//ssl end

Route::get('/searching_restaurant', function (){

    $popularRestaurants = Restaurant::latest()->take(5)->get();

    return view ('searching.searching_res', ['popular_restaurants'=>$popularRestaurants,]);
})->name('searching_restaurant');
Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('search_restaurant', [SearchRestaurantController::class, 'search'])->name('search_restaurant');
Route::get('completereservation/{res_id}/{hour}/{_token}',[SearchRestaurantController::class,'com_reservation'])->name('completereservation');
Route::post('create-order',[OrderController::class,'createOrder'])->name('create-order');
Route::get('restaurants_show/{restaurant}', [RestaurantController::class, 'show'])->name('restaurants.show');
Route::get('/showmenuitem/{res_id}/{category}',[RestaurantController::class,'showMenu'])->name('showmenuitem');
Route::get('eachitemmenu/{res_id}/{subCatergory}',[RestaurantController::class,'eachItem'])->name('eachitemmenu');
Route::get('gallery/{res_id}', [RestaurantController::class,'gallery'])->name('gallery');
Route::get('foods/{res_id}', [RestaurantController::class,'foods'])->name('foods');
Route::get('interior/{res_id}', [RestaurantController::class,'interior'])->name('interior');
Route::get('exterior/{res_id}', [RestaurantController::class,'exterior'])->name('exterior');
Route::get('findTime/{res_id}',[RestaurantController::class,'findTime'])->name('findTime');

//Cookfood

Route::get('/cookfood',[RecipeController::class,'cookfood'])->name('cookfood');
Route::get('all-recipe',[RecipeController::class,'allRecipe'])->name('all-recipe');
Route::post('/search-recipe', [RecipeController::class, 'searchRecipe'])->name('search-recipe');

// Route::get('/search-recipe-old', [SearchRecipeController::class, 'index'])->name('search-recipe-old');
Route::get('recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('recipes-store', [RecipeController::class, 'store'])->name('recipes-store');

Route::get('/recipe-details/{id}',[RecipeController::class,'recipeDetails'])->name('recipe-details');

Route::get('save-recipe/{id}',[RecipeController::class,'saveRecipes'])->name('save-recipe');

Route::get('list-save-recipes',[RecipeController::class,'listSaveRecipes'])->name('list-save-recipes');

// ///////////////////////////////////////////////////




// //////////////////////////////////////////////////////////////






Route::get('/interior', function (){
    return view('interior');
});
Route::get('/exterior', function (){
    return view('exterior');
});










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//search CookFood


//search restaurants

Route::get('restaurants/create', [RestaurantController::class, 'create'])->name('restaurants.create');
Route::post('restaurants', [RestaurantController::class, 'store'])->name('restaurants.store');

//recentlyviewedrestaurant
Route::get('/recentallrestaurants', [App\Http\Controllers\RecentallViewRestaurantController::class, 'show'])->name('restaurants.recentlyviewed');

//popularviewedrestaurant
Route::get('/popularallrestaurants', [App\Http\Controllers\PopularallViewRestaurantController::class, 'show'])->name('restaurants.popularrestaurant');
Route::get('search',[SearchRestaurantController::class,'sr']);


// 