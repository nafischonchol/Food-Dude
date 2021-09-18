<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;



class OrderController extends Controller
{
    //
    function createOrder(Request $req)
    {
       
        if(empty($req->mobile))
        {
            return back()->withInput()->with('warning',"Mobile required!");
        }
        if(empty($req->fname) || empty($req->lname))
        {
            return back()->withInput()->with('warning',"first name and last name required!");
        }
        $data = new Order;
        $data->mobile = $req->mobile;
        $data->email = $req->email;
        $data->res_name = $req->res_name;
        $data->res_id = $req->res_id;
        $data->fname = $req->fname;
        $data->lname = $req->lname;
        $data->specialReq = $req->specialReq;
        $data->hour = $req->date;
        $data->date = session('date');
        $data->people = session('people');
        $data->save();
        
        echo "Order is pending. Payment model working!";
        
    }
    function orderShow()
    {
        $res_id=session('res_id');
        $sql="select * from orders where res_id=".$res_id." order by date desc";
        $data=DB::select($sql);
        return view('iamrestaurant.orders.index',['data'=>$data]);
    }
}
