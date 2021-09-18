<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\DB;



class IamRestaurant extends Controller
{

    function resturantProfile()
    {
        $res_id=session('res_id');
        $data=Restaurant::where('id',$res_id)->get();
        return view('iamrestaurant.setting.profile',['data'=>$data]);
    }

    function editForm()
    {
        $res_id=session('res_id');
        $data=Restaurant::where('id',$res_id)->get();
        return view('iamrestaurant.setting.edit',['data'=>$data]);
    }

    function updateResturnat(Request $req)
    {
       
        Restaurant::where('id',session('res_id'))->update(['mobile'=>$req->input('mobile'),'owner'=>$req->input('owner'),'city'=>$req->input('city'),'location'=>$req->input('location'),'note'=>$req->input('note'),'diningInfo'=>$req->input('diningInfo'),'email'=>$req->input('email'),'res_name'=>$req->input('res_name'),'website'=>$req->input('website'),'description'=>$req->input('description')]);
        
        return redirect('resturant-profile')->with('success','Update successfully!');
    }

    function login(Request $req)
    {
        // $restaurant = Restaurant::where('mobile',$req->input('mobile'))->first();
        $data=DB::select('select * from restaurants where mobile="'.$req->mobile.'"');

        if(empty($data[0]))
            return back()->with('warning',"Mobile is incorrect!");

        $res=$data[0];
        $hashedPassword=$res->pass;
        if (Hash::check($req->input('password'), $hashedPassword)) 
        {
            session()->put('resturant-login','True');
            session()->put('role','resturant-admin');
            session()->put('res_id',$res->id);
            session()->put('mobile',$res->mobile);
            session()->put('zrole','resturant-admin');
            session()->put('owner',$res->owner);
            session()->put('res_name',$res->res_name);
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
        $restaurant->diningInfo=$req->diningInfo;
        $restaurant->note=$req->note;


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
