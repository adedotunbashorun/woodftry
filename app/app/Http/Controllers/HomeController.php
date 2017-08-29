<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Client_info;
use App\Goods_item;
use App\Goods_item_design;
use App\Client_order;
use App\Carpenter_info;
use App\Inhouse_order;
use App\Stock;
use App\User;
class HomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        return view('session/login');
    }
    
    public function index(){
    	$users=DB::table('users')->count();
        $notdone=DB::table('client_orders')->where('status','<',4)->count();
        $done=DB::table('client_orders')->where('status',4)->count();
        $items= DB::table('goods_items')->count();
        $designs=DB::table('goods_item_designs')->count();
        $carp=DB::table('carpenter_infos')->count();
        $userdata = array(
            'users'=>$users,
            'notdone' => $notdone,
            'done' => $done,
            'items' => $items,
            'designs' => $designs,
            'carp'=>$carp
            );
    	return view('/index',$userdata);
    }

    public function show()
    {
        $carps=Carpenter_info::all()->where('department','carpentry');
        $orders=Client_order::all();
        $inhouse=Inhouse_order::all();
        $designs=Goods_item_design::all();
        $items=Goods_item::all();
        $userdata = array(
            'items' => $items,
            'inhouse'=>$inhouse,
            'designs' => $designs,
            'carps'=>$carps,
            'orders' => $orders
            );
        return view('/search',$userdata);
    }

    public function search()
    {
        if(request('carps_name'))
        {
        $orders=Client_order::where('carpenter_id',request('carps_name'))->get();
        $inhouse=Inhouse_order::all();
        $carps=Carpenter_info::all();
        $clients=Client_info::all();
        $items= Goods_item::all();
        $designs=Goods_item_design::all();
        $userdata = array(
            'orders'=>$orders,
           'carps'=>$carps,
            'infouse'=>$inhouse,
            'clients' => $clients,
            'items' => $items,
            'designs' => $designs
            );
        return view('/search_result',$userdata);
        }elseif(request('item_type'))
        {
            $orders=Client_order::where('item_type',request('item_type'))->get();
            $inhouse=Inhouse_order::all();
            $carps=Carpenter_info::all();
            $clients=Client_info::all();
            $items= Goods_item::all();
            $designs=Goods_item_design::all();
            $userdata = array(
                'orders'=>$orders,
               'carps'=>$carps,
                'infouse'=>$inhouse,
                'clients' => $clients,
                'items' => $items,
                'designs' => $designs
                );
            return view('/search_result',$userdata);  
        }elseif(request('design_name'))
        {
            $orders=Client_order::where('design_ref',request('design_name'))->get();
            $inhouse=Inhouse_order::all();
            $carps=Carpenter_info::all();
            $clients=Client_info::all();
            $items= Goods_item::all();
            $designs=Goods_item_design::all();
            $userdata = array(
                'orders'=>$orders,
               'carps'=>$carps,
                'infouse'=>$inhouse,
                'clients' => $clients,
                'items' => $items,
                'designs' => $designs
                );
            return view('/search_result',$userdata);  
        }elseif(request('carps_name') && request('design_name'))
        {
            $orders=Client_order::where('carpenter_id',request('carps_name'))->where('design_ref',request('design_name'))->get();
            $inhouse=Inhouse_order::all();
            $carps=Carpenter_info::all();
            $clients=Client_info::all();
            $items= Goods_item::all();
            $designs=Goods_item_design::all();
            $userdata = array(
                'orders'=>$orders,
               'carps'=>$carps,
                'infouse'=>$inhouse,
                'clients' => $clients,
                'items' => $items,
                'designs' => $designs
                );
            return view('/search_result',$userdata);  
        }elseif(request('carps_name') && request('item_type'))
        {
            $orders=Client_order::where('carpenter_id',request('carps_name'))->where('item_type',request('item_type'))->get();
            $inhouse=Inhouse_order::all();
            $carps=Carpenter_info::all();
            $clients=Client_info::all();
            $items= Goods_item::all();
            $designs=Goods_item_design::all();
            $userdata = array(
                'orders'=>$orders,
               'carps'=>$carps,
                'infouse'=>$inhouse,
                'clients' => $clients,
                'items' => $items,
                'designs' => $designs
                );
            return view('/search_result',$userdata);  
        }elseif(request('design_name') && request('item_type'))
        {
            $orders=Client_order::where('design_ref',request('design_name'))->where('item_type',request('item_type'))->get();
            $inhouse=Inhouse_order::all();
            $carps=Carpenter_info::all();
            $clients=Client_info::all();
            $items= Goods_item::all();
            $designs=Goods_item_design::all();
            $userdata = array(
                'orders'=>$orders,
               'carps'=>$carps,
                'infouse'=>$inhouse,
                'clients' => $clients,
                'items' => $items,
                'designs' => $designs
                );
            return view('/search_result',$userdata);  
        }else{
            $orders=Client_order::where('carpenter_id',request('carps_name'))->where('item_type',request('item_type'))->where('design_ref',request('design_name'))->where('created_at',request('from'))->get();
            $inhouse=Inhouse_order::all();
            $carps=Carpenter_info::all();
            $clients=Client_info::all();
            $items= Goods_item::all();
            $designs=Goods_item_design::all();
            $userdata = array(
                'orders'=>$orders,
               'carps'=>$carps,
                'infouse'=>$inhouse,
                //'ups'=>$ups,
                'clients' => $clients,
                'items' => $items,
                'designs' => $designs
                );
            return view('/search_result',$userdata);
        }
        
    }

    /*public function result()
    {
        //$users = \App\User::all(array('id','name','email','group_id'));
        //$groups = \App\Group::all(array('id','group_name'));
        $orders=Client_order::all(array('id','client_id','upholstery_id','sprayer_id','user_id','carpenter_id','product_key','upholstery_quantity','sprayer_quantity','finished_quantity','quantity'));
        $carps=Carpenter_info::all(array('id','name'));
        $clients=Client_info::all(array('id','client_name'));
        $items= Goods_item::all();
        $designs=Goods_item_design::all();
        $userdata = array(
            'orders'=>$orders,
            'carps'=>$carps,
            //'sprays'=>$sprays,
            //'ups'=>$ups,
            'clients' => $clients,
            'items' => $items,
            'designs' => $designs
            );
        return view('/search_result',$userdata);
    }*/

}
