<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;


class MenuController extends Controller
{
    //
    function showAdminMenu()
    {

        $sql="select * from menus where res_id=".session('res_id');
        $data=DB::select($sql);
        return view('iamrestaurant.menu.index',['data'=>$data]);
    }

    function formPage()
    {
        return view('iamrestaurant.menu.create-menu');
    }

    function create(Request $req)
    {
        
        $validator = Validator::make($req->all(), [
            
            'menuType'   => 'required',
            'category' => 'required',
            'subCatergory' => 'required',
            'price' => 'required',
            'image'=>'required'
        ]);
        if ($validator->fails()) {
            return back()->with($validator->errors()->messages())->withInput();
        }
        

        $filename="";
        if($req->hasFile('image'))
        {
            $filename=Str::random(20).".jpg";
            $image = $req->file('image');
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300);
            $path = public_path('images/menu/'.$filename);
            $image_resize->save($path);
            $image_resize->destroy();
        }
        
        $menu = new Menu;
        $menu->menuType = $req->menuType;
        $menu->res_id = session('res_id');
        $menu->res_name = session('res_name');


        $menu->category = $req->category;
        $menu->subCatergory = $req->subCatergory;
        $menu->price = $req->price;
        $menu->image = $filename;
        $menu->description = $req->description;
        $menu->ingredients = $req->ingredients;
        $menu->nutrition = $req->nutrition;
       
      
        $menu->save();
        return redirect('show-admin-manu')->with('success',"Successfully Added!");

    }
  
      
}
