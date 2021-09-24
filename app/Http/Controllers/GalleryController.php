<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Validator;
use Image;
use Illuminate\Support\Str;



class GalleryController extends Controller
{
    //
    function index()
    {
        $res_id=session('res_id');
        $data=Gallery::where('res_id',$res_id)->orderBy('id', 'DESC')->get();
        return view('iamrestaurant.gallery.index',['data'=>$data]);
    }

    function from()
    {
        return view('iamrestaurant.gallery.from');
    }

    function save(Request $req)
    {
        $validator = Validator::make($req->all(), [
            
            'imageType'   => 'required',
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
            $path = public_path('images/gallery/'.$filename);
            $image_resize->save($path);
            $image_resize->destroy();
        }
        $Gallery = new Gallery;
        $Gallery->image = $filename;
        $Gallery->res_id = session('res_id');
        $Gallery->imageType = $req->imageType;


        $Gallery->save();
        return redirect('show-galleries')->with('success',"Successfully Added!");
       
    }
}
