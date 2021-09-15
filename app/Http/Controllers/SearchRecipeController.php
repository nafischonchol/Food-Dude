<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchRecipeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'query' => 'nullable|min:2',
        ]);

        $recipes = Recipe::query();

        $query = $request->get('query');

        if ($query) {
            $recipes = $recipes->where('title', 'like', "%$query%")->orWhere('description', 'like', "%$query%");
        }

        $recipes = $recipes->latest()->paginate(10);

        return view('searched-results', compact('recipes'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $recipie = Recipe::make($request->only(['title', 'duration', 'author', 'description']));

        if ($request->hasFile('image')) {
            $img_name = $request->image->store('recipes');

            $recipie->image = $img_name;
        }

        $recipie->save();

        return redirect('/search')->with('success', 'New recipe has been added.');
    }
}
