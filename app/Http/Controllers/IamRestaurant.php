<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Image;


class IamRestaurant extends Controller
{

    function login(Request $req)
    {
        $restaurant = Restaurant::where('mobile',$req->input('mobile'))->first();
        $res = $restaurant->getRawOriginal();
    
        $hashedPassword=$res['pass'];
        if (Hash::check($req->input('password'), $hashedPassword)) 
        {
            session()->put('resturant-login','True');
            session()->put('role','resturant-admin');
            session()->put('res_id',$res['id']);
            session()->put('mobile',$res['mobile']);
            session()->put('zrole','resturant-admin');
            session()->put('owner',$res['owner']);
            session()->put('res_name',$res['res_name']);
            // return back()->with('warning',"Login Succes!");
            return redirect('mainmenu');

        }
        else
            return back()->with('warning',"Mobile or password is incorrect!");

    }
    function createResturant(Request $req)
    {
   
        $filename="";
        if($req->hasFile('image'))
        {
            $filename=Str::random(20).".jpg";
            $image = $req->file('image');
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300);
            $path = public_path('images/resturant/'.$filename);
            $image_resize->save($path);
            $image_resize->destroy();
        }
        else
        {
            return back()->withInput()->with('warning',"Image required!");
        }

        if($req->pass!=$req->con_pass)
        {
            return back()->withInput()->with('warning',"Password and Confirm password does not't match!");
        }

        $restaurant = new Restaurant;
        $restaurant->mobile = $req->mobile;
        $restaurant->email = $req->email;
        $restaurant->owner = $req->owner;
        $restaurant->res_name = $req->res_name;
        $restaurant->city = $req->city;
        $restaurant->description = $req->description;
        $restaurant->location = $req->location;
        $restaurant->website = $req->website;
        $restaurant->image = $filename;

        $restaurant->pass = Hash::make($req->pass);
         
        $restaurant->save();
        return back()->with('success',"Successfully Registered!");
    }

    function logout()
    {
        session()->forget(['resturant-login']);
        return redirect('iamrestaurant-login');
        
    }
   
}
