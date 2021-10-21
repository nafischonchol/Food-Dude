<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class SearchRestaurantController extends Controller
{
   
    public function search(Request $req){
      
        if(!Auth::user())
            return back()->with('warning','Please Login First!');
        
        if(empty($req->date))
            return back()->with('warning',"Please pick a date first!");
      
        if(empty($req->location))
            $sql="select *,( select count(*) from orders where orders.res_id=restaurants.id ) as booked,(SELECT GROUP_CONCAT(hours) FROM `hours` where hours.res_id=restaurants.id group by res_id ) hours from restaurants where id in (SELECT res_id FROM `hours` where zactive=1 and tableQty>0 GROUP by res_id)";
        else
            $sql="select *,( select count(*) from orders where orders.res_id=restaurants.id ) as booked,(SELECT GROUP_CONCAT(hours) FROM `hours` where hours.res_id=restaurants.id group by res_id ) hours from restaurants where id in (SELECT res_id FROM `hours` where zactive=1 and tableQty>0 GROUP by res_id) and (location like '%".$req->location."%' or city like '%".$req->location."%' or res_name like '%".$req->location."%' or description like '%".$req->location."%')";
        $data=DB::select($sql);

        //insert zlogs
        $user_id=Auth::id();
        $_token=$req->input('_token');
        if(isset($data[0]))
            $data[0]->_token=$_token;

        $zl=json_encode($req->input());
        $sql="INSERT INTO `zlogs`(`user_id`, `zinfo`, `ztoken`) VALUES (".$user_id.",'".$zl."','".$_token."')";
        DB::insert($sql);

        session()->put('date',$req->date);
        session()->put('people',$req->people);

        return view('searching.findrestaurant', ['restaurant'=>$data]);
    }

    function com_reservation($res_id,$hour,$_token)
    {
        $sql="select zinfo from zlogs where ztoken='".$_token."' order by id desc limit 1";
        $zlogs=DB::select($sql);

        if(!isset($zlogs[0]))
            return back()->with('warning','Token not matching!');
        
        $zinfoD=json_decode($zlogs[0]->zinfo);
        $zinfoD->hour=$hour;
        $zinfoD->res_id=$res_id;
        $zinfoE=json_encode($zinfoD);
        $upSql="UPDATE `zlogs` SET zinfo='".$zinfoE."' WHERE ztoken='".$_token."'";
        DB::update($upSql);

        

        // session()->put('reserve_hour',$hour);
        // $date=session('date');
        // $people=session('people');
        // $result=compact("date","hour","people");
        $data=Restaurant::where('id',$res_id)->get();
        return view('searching.completereservation',['data'=>$data,'result'=>$zinfoD]);
    }

    // function com_reservation($res_id,$hour)
    // {
    //     session()->put('reserve_hour',$hour);
    //     $date=session('date');
    //     $people=session('people');
    //     $result=compact("date","hour","people");
    //     $data=Restaurant::where('id',$res_id)->get();
    //     return view('searching.completereservation',['data'=>$data,'result'=>$result]);
    // }

 

    
}
