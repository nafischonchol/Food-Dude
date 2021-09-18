<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;


class GalleryController extends Controller
{
    //
    function index()
    {
        // $res_id=session('res_id');
        // $data=Gallery::where('res_id',$res_id)->orderBy('id', 'DESC')->get();
        return view('iamrestaurant.gallery.index');
    }
}
