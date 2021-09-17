<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hour;


class YourTableController extends Controller
{
    //
    function index()
    {
        $res_id=session('res_id');
        $data=Hour::where('res_id',$res_id)->orderBy('id', 'DESC')->get();
        return view('iamrestaurant.your-table.index',['data'=>$data]);
    }

    function create(Request $req)
    {
        // dd($req->input());
        $res_id=session('res_id');
        if(Hour::where('hours',$req->input('hours'))->where('res_id',$res_id)->exists())
            return back()->with('warning',"This hour already exists");
        else if($req->input('tableQty')<=0)
            return back()->with('warning',"Table qty should be greater than 0!");
        else
        {
            $hours = new Hour;
            $hours->tableQty=$req->input('tableQty');
            $hours->hours=$req->input('hours');
            $hours->res_id=$res_id;
            $hours->save();
            return redirect('your-table');
        }

    }

    function editForm($id)
    {
        $data=Hour::where('id',$id)->get();
        return view('iamrestaurant.your-table.edit',['data'=>$data]);

    }

    function edit(Request $req)
    {
        
        $zactive=1;
        if($req->input('zactive')=='Active')
            $zactive=1;
        else
            $zactive=0;

        Hour::where('id',$req->input('id'))->update(['tableQty'=>$req->input('tableQty'),'zactive'=>$zactive]);
        return redirect('your-table')->with('success','Update successfully!');


    }
}
