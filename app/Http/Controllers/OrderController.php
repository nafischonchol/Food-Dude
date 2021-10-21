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
    function confirmOrderShow()
    {
        $res_id=session('res_id');
        $sql="select * from orders where res_id=".$res_id." and zactive='Confrim' order by date desc";
        $data=DB::select($sql);
        return view('iamrestaurant.orders.index',['data'=>$data,'type'=>'Confirm']);
    }

    function waitingRoomShow()
    {
        $res_id=session('res_id');
        $sql="select *,(select user_point from users where users.id=orders.user_id) as user_point from orders where res_id=".$res_id." and zactive='Wating Room' order by date desc";
        $data=DB::select($sql);
        return view('iamrestaurant.orders.waiting',['data'=>$data,'type'=>'Waiting room']);
    }
    function completeOrdersShow()
    {
        $res_id=session('res_id');
        $sql="select * from orders where res_id=".$res_id." and zactive='Complete' order by date desc";
        $data=DB::select($sql);
        return view('iamrestaurant.orders.ncomplete',['data'=>$data,'type'=>'Complete']);
    }
    function notCompleteOrdersShow()
    {
        $res_id=session('res_id');
        $sql="select * from orders where res_id=".$res_id." and zactive='Not Complete' order by date desc";
        $data=DB::select($sql);
        return view('iamrestaurant.orders.ncomplete',['data'=>$data,'type'=>'Not Complete']);
    }
    function declineOrdersShow()
    {
        $res_id=session('res_id');
        $sql="select * from orders where res_id=".$res_id." and zactive='Decline' order by date desc";
        $data=DB::select($sql);
        return view('iamrestaurant.orders.ncomplete',['data'=>$data,'type'=>'Decline']);
    }

    function orderCheck($user_id,$type,$order_id)
    {
        if($type=='Yes')
        {
            $pointSql="UPDATE `users` SET `user_point`=`user_point`+5 WHERE id=".$user_id;
            $orderSql="UPDATE `orders` SET `zactive`='Complete' WHERE id=".$order_id;
        }
        else
        {
            $pointSql="UPDATE `users` SET `user_point`=`user_point`-5 WHERE id=".$user_id;
            $orderSql="UPDATE `orders` SET `zactive`='Not Complete' WHERE id=".$order_id;

        }
        DB::update($pointSql);
        DB::update($orderSql);
        return back()->with('success','Status Updated');
    }

    

    function orderConfirm($type,$order_id)
    {
        if($type=='Yes')
        {
            $orderSql="UPDATE `orders` SET `zactive`='Confirm' WHERE id=".$order_id;
        }
        else
        {
            $orderSql="UPDATE `orders` SET `zactive`='Decline' WHERE id=".$order_id;
        }
        DB::update($orderSql);
        return back()->with('success','Status Updated');
    }
}
