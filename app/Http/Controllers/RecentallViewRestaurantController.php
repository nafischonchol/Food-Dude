<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RecentallViewRestaurantController extends Controller
{

    function show(){
        $data = Restaurant::paginate(4);
        return view('restaurants.recentlyviewed',['allrestaurants'=>$data]);

    }
}
