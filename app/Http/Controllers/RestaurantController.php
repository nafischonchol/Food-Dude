<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'location' => 'nullable|min:2',
        ]);

        $restaurant = Restaurant::query();

        $location = $request->get('location');

        if ($location) {
            $restaurant = $restaurant->where('title', 'like', "%$location%")
            ->orWhere('location', 'like', "%$location%");
        }

        $restaurant = $restaurant->latest()->paginate(10);

        return view('findrestaurant', compact('restaurant'));
    }
    public function create()
    {
        return view('restaurants.createrestaurant');
    }

    public function store(Request $request)
    {
        $restaurant = Restaurant::make($request->only(['title','locale', 'location', 'description', 'hours_of_operation','dining_style','dress_code','website','contact']));

        if ($request->hasFile('image')) {
            $img_name = $request->image->store('restaurants');

            $restaurant->image = $img_name;
        }

        $restaurant->save();

        return redirect('/searchrestaurant')->with('success', 'New recipe has been added.');
    }


    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', compact('restaurant'));


    }


}

