<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class PopularallViewRestaurantController extends Controller
{
    function show(){
        $data = Restaurant::paginate(4);
        return view('restaurants.popularrestaurant',['allrestaurants'=>$data]);
}
}
