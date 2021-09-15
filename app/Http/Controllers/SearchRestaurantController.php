<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class SearchRestaurantController extends Controller
{
    // function showall(){
    //     $data = Restaurant::paginate(4);
    //     return view('Searchingrestaurant',['allrestaurants'=>$data]);

    // }
    public function sr(){
        // dd('ss');
        return view('Searchingrestaurant');
    }
}
