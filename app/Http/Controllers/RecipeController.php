<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Auth;
use Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class RecipeController extends Controller
{
   
    function cookfood()
    {
        $sql="SELECT * FROM `recipes` ORDER BY `id` DESC limit 10";
        $data=DB::select($sql);
        return view('cookfood.index',['data'=>$data]);
    
    }
    function allRecipe()
    {
        $sql="SELECT * FROM `recipes` ORDER BY `id` DESC ";
        $recipes=DB::select($sql);
       
        return view('cookfood.all-recipe',['recipes'=>$recipes]);
    }
    function recipeDetails($id)
    {
        $sql="SELECT * FROM `recipes` where id=".$id;
        $data=DB::select($sql);
        
        return view ('cookfood.recipe-details',['data'=>$data]);
    }
    function searchRecipe(Request $req)
    {
        $query = $req->get('query');
        
        $sql="SELECT * FROM `recipes` where title like '%".$query."%' or  description like '%".$query."%' or method like '%".$query."%' or cat like '%".$query."%' or ingre like '%".$query."%'";

        
        $recipes=DB::select($sql);

        

        return view('cookfood.search-recipe', compact('recipes'));
    }
    public function create()
    {
        if (!Auth::check())
        {    
            return redirect('login')->with('warning','Login First');
        }   
       
        return view('recipes.create');
    }

    public function store(Request $req)
    {
        // print_r($req->input());
        // die;
        $filename="";
        if($req->hasFile('image'))
        {
            $filename=Str::random(20).".jpg";
            $image = $req->file('image');
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300);
            $path = public_path('images/recipes/'.$filename);
            $image_resize->save($path);
            $image_resize->destroy();
        }
        else
        {
            return back()->withInput()->with('warning',"Image required!");
        }

        if(empty($req->title))
            return back()->withInput()->with('warning',"Title can't be empty!");
        if(empty($req->description))
            return back()->withInput()->with('warning',"Description can't be empty!");
        if(empty($req->author))
            return back()->withInput()->with('warning',"Author can't be empty!");
        if(empty($req->duration))
            return back()->withInput()->with('warning',"Duration can't be empty!");
            
        $recipe = new Recipe;
        $recipe->title = $req->title;
        $recipe->duration = $req->duration;
        $recipe->author = $req->author;
        $recipe->cat = $req->cat;
        $recipe->description = $req->description;
        $recipe->ingre = $req->ingre;
        $recipe->method = $req->method;
        
        $recipe->image = $filename;

        $recipe->save();
        return redirect('cookfood')->with('success',"New recipe added successfully!");
        // return back()->with('warning',"New recipe added successfully!");
        
    }
}
