<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Menu;

use Illuminate\Http\Request;
use DB;


class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'location' => 'nullable|min:2',
        ]);

        $restaurant = Restaurant::query();

        $location = $request->get('location');

        if ($location) {
            $restaurant = $restaurant->where('title', 'like', "%$location%")
            ->orWhere('location', 'like', "%$location%");
        }

        $restaurant = $restaurant->latest()->paginate(10);

        return view('findrestaurant', compact('restaurant'));
    }
    public function create()
    {
        return view('restaurants.createrestaurant');
    }

    public function store(Request $request)
    {
        $restaurant = Restaurant::make($request->only(['title','locale', 'location', 'description', 'hours_of_operation','dining_style','dress_code','website','contact']));

        if ($request->hasFile('image')) {
            $img_name = $request->image->store('restaurants');

            $restaurant->image = $img_name;
        }

        $restaurant->save();

        return redirect('/searchrestaurant')->with('success', 'New recipe has been added.');
    }


    public function show($res_id)
    {
        $forMenu="Select *,( select count(*) from orders where orders.res_id=menus.res_id) as booked from menus where res_id=".$res_id." order by menuType";
        $menus=DB::select($forMenu);

        $data=Restaurant::where('id',$res_id)->get();
        if(empty($data[0]))
            return redirect('/searching_restaurant');
        return view('restaurants.show',['restaurant'=>$data[0],'menus'=>$menus,'res_id'=>$res_id]);

    }

    function showMenu($res_id,$category)
    {
        $forMenu="Select * from menus where category='".$category."' and res_id=".$res_id;
        $menu=DB::select($forMenu);
        if(empty($menu))
            return back();
        return view('restaurants.showmenuitem',['menu'=>$menu]);
    }

    function eachItem($res_id,$subCatergory)
    {
        // echo 'Will show details of menus';
        $sql="Select * from menus where subCatergory='".$subCatergory."' and res_id=".$res_id;
        $eachItem=DB::select($sql);
        return view('restaurants.eachitemmenu',['eachItem'=>$eachItem]);
    }

    function gallery($res_id)
    {
        $forgallery="Select * from galleries where res_id=".$res_id;
        $gallery=DB::Select($forgallery);

        $forFood="Select * from menus where res_id=".$res_id;
        $foods=DB::Select($forFood);

        return view('restaurants.gallery',['gallery'=>$gallery,'foods'=>$foods]);

    }


    function foods($res_id)
    {
        $forFood="Select * from menus where res_id=".$res_id;
        $foods=DB::Select($forFood);
        return view('restaurants.food',['foods'=>$foods]);

    }

    function interior($res_id)
    {
        $forInterior="Select * from galleries where imageType='interior' and res_id=".$res_id;
        $interior=DB::Select($forInterior);
        return view('restaurants.interior',['interior'=>$interior]);

    }
    function exterior($res_id)
    {
        $forExterior="Select * from galleries where imageType='exterior' and res_id=".$res_id;
        $exterior=DB::Select($forExterior);
        return view('restaurants.exterior',['exterior'=>$exterior]);
    }

    function findTime(Request $req)
    {
        
        session()->put('date',$req->date);
        session()->put('people',$req->people);

        $res_id=$req->res_id;
        $forMenu="Select *,( select count(*) from orders where orders.res_id=menus.res_id) as booked from menus where res_id=".$res_id." order by menuType";
        $menus=DB::select($forMenu);

        $data=Restaurant::where('id',$res_id)->get();
        if(empty($data[0]))
            return redirect('/searching_restaurant');

        $forTime="select * from hours where tableQty>0 and res_id=".$res_id;
        $time=DB::select($forTime);

        $time[0]->date=$req->date;
        $time[0]->people=$req->people;

        return view('restaurants.show',['restaurant'=>$data[0],'menus'=>$menus,'time'=>$time,'res_id'=>$res_id]);
    }

    


}

