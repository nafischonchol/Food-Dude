<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchRestaurantController extends Controller
{
   
    public function search(Request $req){
      
        
        if(empty($req->date))
            return back()->with('warning',"Please pick a date first!");
      
        if(empty($req->location))
            $sql="select *,( select count(*) from orders where orders.res_id=restaurants.id ) as booked,(SELECT GROUP_CONCAT(hours) FROM `hours` where hours.res_id=restaurants.id group by res_id ) hours from restaurants where id in (SELECT res_id FROM `hours` where zactive=1 and tableQty>0 GROUP by res_id)";
        else
            $sql="select *,( select count(*) from orders where orders.res_id=restaurants.id ) as booked,(SELECT GROUP_CONCAT(hours) FROM `hours` where hours.res_id=restaurants.id group by res_id ) hours from restaurants where id in (SELECT res_id FROM `hours` where zactive=1 and tableQty>0 GROUP by res_id) and (location like '%".$req->location."%' or city like '%".$req->location."%' or res_name like '%".$req->location."%' or description like '%".$req->location."%')";
        $data=DB::select($sql);

        session()->put('date',$req->date);
        session()->put('people',$req->people);

        return view('searching.findrestaurant', ['restaurant'=>$data]);
    }

    function com_reservation($res_id,$hour)
    {
        session()->put('reserve_hour',$hour);

    
        
        $date=session('date');
        $people=session('people');
        $result=compact("date","hour","people");
        $data=Restaurant::where('id',$res_id)->get();

       
        return view('searching.completereservation',['data'=>$data,'result'=>$result]);
        
    }

 

    
}
