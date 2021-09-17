<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourTableController extends Controller
{
    //
    function index()
    {
        return view('iamrestaurant.your-table.index');
    }
}
