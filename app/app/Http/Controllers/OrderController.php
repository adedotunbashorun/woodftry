<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Client_request;
use DB;
use App\Client_info;
use App\Goods_item;
use App\Goods_item_design;
use App\Client_order;
use App\Carpenter_info;
use App\Inhouse_order;
use App\Stock;
use App\User;
class OrderController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        return view('session/login');
    }


    public function create()
    {
    	return view('registration.order');
    }

    public function increate()
    {
        return view('registration.inhouse');
    }

   public function store()
    {
    	$this->validate(request(),[
            'client_id'=>'required',
            'item_type'=>'required',
            'item_size'=>'required',
            'design_ref'=>'required',
            'quantity'=>'required',
        ]);
            $items = Goods_item::where('item_code_name',request('item_type'))->get();
            foreach ($items as $item) {
                $itemRef = $item->item_ref;
            }
            $product_key = request('item_type').'-'.$itemRef.'-'.request('item_size').'-'.'W'.'-'.request('design_ref');
            Client_request::create([
                'client_id'=>request('client_id'),
                'item_type'=>request('item_type'),
                'item_ref'=>$itemRef,
                'item_size'=>request('item_size'),
                'item_material'=>'W',
                'design_ref'=>request('design_ref'),
                'quantity'=>request('quantity'),
                'product_key'=>$product_key,
                'specification'=>request('specification'),
                'Type'=>1,
                'user_id'=>auth()->user()->id 
            ]);
            return redirect()->route('Request')->with(Session::flash('message'," Client Wood Request Successfully. " ));
    }

    public function lamstore()
    {
        $this->validate(request(),[
            'client_id'=>'required',
            'item_type'=>'required',
            'item_size'=>'required',
            'design_ref'=>'required',
            'quantity'=>'required',
        ]);
            $items = Goods_item::where('item_code_name',request('item_type'))->get();
            foreach ($items as $item) {
                $itemRef = $item->item_ref;
            }
            $product_key = request('item_type').'-'.$itemRef.'-'.request('item_size').'-'.'L'.'-'.request('design_ref');
            Client_request::create([
                'client_id'=>request('client_id'),
                'item_type'=>request('item_type'),
                'item_ref'=>$itemRef,
                'item_size'=>request('item_size'),
                'item_material'=>'L',
                'design_ref'=>request('design_ref'),
                'quantity'=>request('quantity'),
                'product_key'=>$product_key,
                'specification'=>request('specification'),
                'Type'=>1,
                'user_id'=>auth()->user()->id 
            ]);  
            return redirect()->route('Request')->with(Session::flash('message'," Client laminate Request Successful. " ));
    }

    public function instore()
    {
        $this->validate(request(),[
            'client_id'=>'required',
            'item_type'=>'required',
            'item_size'=>'required',
            'design_ref'=>'required',
            'quantity'=>'required',
            'carpenter_id'=>'required',
        ]);
        $items = Goods_item::get()->where('item_code_name',request('item_type'));
        foreach ($items as $item) {
            $itemRef = $item->item_ref;
        }
        $product_key = request('item_type').'-'.$itemRef.'-'.request('item_size').'-'.'W'.'-'.request('design_ref');
        $count=DB::table('client_orders')->where('product_key','=',$product_key)->count();
        if($count > 0)
        {
            DB::update('update client_orders set quantity = quantity +"'.request('quantity').'",status = 0 where  product_key = "'.$product_key.'"');
                return redirect()->route('show')->with(Session::flash('message',"Product Exist Already quantity Updated. " ));
        }
        else{
        Client_order::create([
            'client_id'=>request('client_id'),
            'carpenter_id'=>request('carpenter_id'),
            'item_type'=>request('item_type'),
            'item_ref'=>$itemRef,
            'item_size'=>request('item_size'),
            'item_material'=>'W',
            'design_ref'=>request('design_ref'),
            'quantity'=>request('quantity'),
            'product_key'=>$product_key,
            'specification'=>request('specification'),
            'user_id'=>auth()->user()->id 
        ]);
        }
        return redirect()->route('show')->with(Session::flash('message'," Order Added Successfully. " ));
    }

    public function laminstore()
    {
        $this->validate(request(),[
            'client_id'=>'required',
            'item_type'=>'required',
            'item_size'=>'required',
            //'item_material'=>'required',
            'design_ref'=>'required',
            'quantity'=>'required',
            'laminate_id'=>'required',
        ]);
        $items = Goods_item::get()->where('item_code_name',request('item_type'));
        foreach ($items as $item) {
            $itemRef = $item->item_ref;
        }
        //calculating the amount for the order
        

        $product_key = request('item_type').'-'.$itemRef.'-'.request('item_size').'-'.'L'.'-'.request('design_ref');
        Client_order::create([
            'client_id'=>request('client_id'),
            'laminate_id'=>request('laminate_id'),
            'item_type'=>request('item_type'),
            'item_ref'=>$itemRef,
            'item_size'=>request('item_size'),
            'item_material'=>'L',
            'design_ref'=>request('design_ref'),
            'quantity'=>request('quantity'),
            'product_key'=>$product_key,
            'specification'=>request('specification'),
            'user_id'=>auth()->user()->id 
        ]);

        return redirect()->route('show')->with(Session::flash('message'," Order Added Successfully. " ));
    }

    public function show()
    {
        $carps=Carpenter_info::all()->where('department','carpentry');
        $sprays=Carpenter_info::all()->where('department','spray');
        $ups=Carpenter_info::all()->where('department','upholstery');
        $lam=Carpenter_info::all()->where('department','laminate');
        $clients=Client_info::all();
        $items= Goods_item::all();
        $designs=Goods_item_design::all();
        $userdata = array(
            'carps'=>$carps,
            'sprays'=>$sprays,
            'ups'=>$ups,
            'lam'=>$lam,
            'clients' => $clients,
            'items' => $items,
            'designs' => $designs
            );
        return view('registration.order',$userdata);
    }

    public function inshow()
    {
        $carps=Carpenter_info::all()->where('department','carpentry');
        $sprays=Carpenter_info::all()->where('department','spray');
        $ups=Carpenter_info::all()->where('department','upholstery');
        $clients=Client_info::all();
        $items= Goods_item::all();
        $designs=Goods_item_design::all();
        $userdata = array(
            'carps'=>$carps,
            'sprays'=>$sprays,
            'ups'=>$ups,
            'clients' => $clients,
            'items' => $items,
            'designs' => $designs
            );
        return view('registration.inhouse',$userdata);
    }

    public function laminshow()
    {
        $lam=Carpenter_info::all()->where('department','laminate');
        $clients=Client_info::all();
        $items= Goods_item::all();
        $designs=Goods_item_design::all();
        $userdata = array(
            'lam'=>$lam,
            'clients' => $clients,
            'items' => $items,
            'designs' => $designs
            );
        return view('registration.inhouse_laminate',$userdata);
    }

    public function showall()
    {
        $orders=Client_request::where('status','!=',4)->OrderBy('id','desc')->get();
        $goods=Goods_item_design::all();
        $carps=Carpenter_info::all();
        $clients=Client_info::all();
        $userdata=  array(
            'orders'=>$orders,
            'goods'=>$goods,
            'carps'=>$carps,
            'clients'=>$clients
            );
        return view('view_order',$userdata);
    }

    public function semifinished1()
    {
        $orders=Client_order::where('Type',0)->where('status',1)->orwhere('current_quantity','!=',0)->where('item_material','!=','L')->orderBy('id','desc')->get();
        $goods=Goods_item_design::all();
        $carps=Carpenter_info::all();
        $clients=Client_info::all();
        $userdata=  array(
            'orders'=>$orders,
            'goods'=>$goods,
            'carps'=>$carps,
            'clients'=>$clients
            );
        return view('semi_finished_1',$userdata);
    }

    public function semifinished2()
    {
        $orders=Client_order::where('Type',0)->where('carpenter_id','!=','0')->where('status','>',1)->where('status','!=',4)->orderBy('id','desc')->get();
        $goods=Goods_item_design::all();
        $carps=Carpenter_info::all();
        $clients=Client_info::all();
        $userdata=  array(
            'orders'=>$orders,
            'goods'=>$goods,
            'carps'=>$carps,
            'clients'=>$clients
            );
        return view('semi_finished_2',$userdata);
    }

    /*public function lamshowall()
    {
        $orders=Client_request::where('Type',1)->where('product_key','%like%','W')->orderBy('id','desc')->get();
         $goods=Goods_item_design::all();
        $carps=Carpenter_info::all();
        $clients=Client_info::all();
        $userdata=  array(
            'orders'=>$orders,
            'goods'=>$goods,
            'carps'=>$carps,
            'clients'=>$clients
            );
        return view('laminate',$userdata);
    }*/

    public function inshowall()
    {
        $orders=Client_order::all()->where('Type',0)->where('status',0)->where('laminate_id',0);
        $goods=Goods_item_design::all();
        return view('view_inhouse',compact('orders','goods'));
    }

    public function laminshowall()
    {
        $orders=Client_order::where('Type',0)->where('status','!=',4)->where('laminate_id','!=',0)->orderBy('laminate_id','asc')->get();
        $goods=Goods_item_design::all();
        return view('view_inhouse_laminate',compact('orders','goods'));
    }

    public function view()
    {
        $orders=Client_order::all()->where('status',4)->where('Type',1);
        $clients=Client_info::all();
        $goods=Goods_item_design::all();
        $clientorder = array(
            'goods'=>$goods,
            'orders'=> $orders,
            'clients' => $clients
            );
        return view('history',$clientorder);
    }

    public function showorder($id,$user,$admin,$carps,$sprays,$ups)
    {
        $carps=Carpenter_info::findorfail($carps);
        $sprays=Carpenter_info::findorfail($sprays);
        $ups=Carpenter_info::findorfail($ups);
        $orders=Client_order::findorfail($id);
        $clients=Client_info::findorfail($user);
        $users=User::findorfail($admin);
        $client_info = array(
            'carps'=>$carps,
            'sprays'=>$sprays,
            'ups'=>$ups,
            'orders'=>$orders,
            'users'=>$users,
            'clients' => $clients
            );
        return view('show_order',$client_info);
    }

    public function lamshoworder($id,$user,$admin,$carps)
    {
        $carps=Carpenter_info::findorfail($carps);
        $orders=Client_order::findorfail($id);
        $clients=Client_info::findorfail($user);
        $users=User::findorfail($admin);
        $client_info = array(
            'carps'=>$carps,
            'orders'=>$orders,
            'users'=>$users,
            'clients' => $clients
            );
        return view('show_laminate_order',$client_info);
    }

    public function inshoworder($id,$user,$admin,$carps)
    {
        $carps=Carpenter_info::findorfail($carps);
        $sprays=Carpenter_info::all()->where('department','spray');
        $ups=Carpenter_info::all()->where('department','upholstery');
        $others=Carpenter_info::all();
        $orders=Client_order::findorfail($id);
        $goods=Goods_item_design::where('design_ref',$orders->design_ref)->first();
        $clients=Client_info::findorfail($user);
        $users=User::findorfail($admin);
        $client_info = array(
            'carps'=>$carps,
            'goods'=>$goods,
            'sprays'=>$sprays,
            'ups'=>$ups,
            'others'=>$others,
            'orders'=>$orders,
            'users'=>$users,
            'clients' => $clients
            );
        return view('show_inhouse',$client_info);
    }

    public function laminshoworder($id,$user,$admin,$carps)
    {
        $carps=Carpenter_info::findorfail($carps);
        $others=Carpenter_info::all();
        $orders=Client_order::findorfail($id);
        $goods=Goods_item_design::where('design_ref',$orders->design_ref)->first();
        $clients=Client_info::findorfail($user);
        $users=User::findorfail($admin);
        $client_info = array(
            'carps'=>$carps,
            'goods'=>$goods,
            'others'=>$others,
            'orders'=>$orders,
            'users'=>$users,
            'clients' => $clients
            );
        return view('show_laminate',$client_info);
    }

     public function viewhistory($id)
    {
        $orders=Client_order::findorfail($id);
        $carps=Carpenter_info::where('id',$orders->carpenter_id)->first();
        $carp=Carpenter_info::where('id',$orders->laminate_id)->first();
        $sprays=Carpenter_info::where('id',$orders->sprayer_id)->first();
        $ups=Carpenter_info::where('id',$orders->upholstery_id)->first();
        $clients=Client_info::where('id',$orders->client_id)->first();
        $users=User::where('id',$orders->user_id)->first();
        $client_info = array(
            'carps'=>$carps,
            'carp'=>$carp,
            'sprays'=>$sprays,
            'ups'=>$ups,
            'orders'=>$orders,
            'users'=>$users,
            'clients' => $clients
            );
        return view('history_details',$client_info);
    }
    
    public function patch($id,$user,$admin,$carps)
    {
        $order = Client_order::findorfail($id);
        if(request('name_id'))
        {   
            if($order->total+request('completed') > $order->quantity - $order->current_quantity){
                return back()->withERRORS(['message'=>'upholstery or sprayer have not completed any job recently!']);
            }else{
            $order->total+=request('completed');
            $order->status = 4;
            $order->save();
            $total=$order->finished_quantity - $order->current_quantity;
            $count=DB::table('stocks')->where('stock_name','=',$order->product_key)->where('order_id',$order->id)->count();
                if($count > 0)
                {
                    DB::table('stocks')->where('stock_name','=',$order->product_key)->where('order_id',$order->id)->update(['total_goods' =>$total,'remainder_goods'=>$total]);
                    return redirect()->route('stock')->with(Session::flash('message'," stock Successfully Updated. " ));
                }
                else{
                    //DB::table('stocks')->where('stock_name','=',$order->product_key)->delete();
                   Stock::create([
                    'order_id'=>$order->id,
                    'stock_name'=>$order->product_key,
                    'type'=>$order->item_type,
                    'size'=>$order->item_size,
                    'design_ref'=>$order->design_ref,
                    'total_goods'=>$total,
                    'remainder_goods'=>$total
                ]);
                   return redirect()->route('stock')->with(Session::flash('message',"Job Completed Successfully . " ));
                    
                }
            }
            
        }
        elseif( $order->quantity < request('quantity') )
        {
            return back()->withERRORS(['message'=>'Your can not take more than the quantity in store']);
        }
        else{
        //calculating the amount for the order
            if(request('upholstery_id')){
            if( $order->finished_quantity < $order->upholstery_quantity + request('quantity') )
            {
                return back()->withERRORS(['message'=>'upholstery can not take more than the quantity in store']);
            }else{
            $order->upholstery_id =request('upholstery_id');
            $order->upholstery_quantity +=request('quantity');
            $order->current_quantity -=request('quantity');
            $order->status = 2;
            $order->save();
            $count=Inhouse_order::get()->where('worker_id',request('upholstery_id'))->where('product_key',$order->product_key)->count();
                if($count)
                {
                    DB::update('update inhouse_orders set upholstery_quantity = upholstery_quantity +"'.request('quantity').'",carp_quantity = "'.$order->finished_quantity.'"  where worker_id = "'.request('upholstery_id').'" AND product_key = "'.$order->product_key.'"');
                    return redirect()->route('s2')->with(Session::flash('message',"upholstery Job Successfully Updated. " ));
                }
                else
                    {
                        Inhouse_order::create([
                            'order_id'=>$order->id,
                            'user_id'=>$order->user_id,
                            'product_key'=>$order->product_key,
                            'worker_id'=>$order->upholstery_id,
                            'upholstery_quantity'=>$order->upholstery_quantity,
                            'carpenter_id'=>$order->carpenter_id,
                            'carp_quantity'=>$order->finished_quantity
                        ]);
                       return redirect()->route('s2')->with(Session::flash('message',"Upholstery Job Allocated Successfully. " )); 
                    }
                }
            }
            elseif(request('sprayer_id')){
                if( $order->finished_quantity < $order->sprayer_quantity + request('quantity') )
                {
                    return back()->withERRORS(['message'=>'Sprayer can not take more than the quantity in store']);
                }else{
                $order->sprayer_id =request('sprayer_id');
                $order->sprayer_quantity +=request('quantity');
                $order->current_quantity -=request('quantity');
                $order->status = 2;
                $order->save();
                $count=Inhouse_order::get()->where('worker_id',request('sprayer_id'))->where('product_key',$order->product_key)
                                                  ->count();
                if($count)
                {
                    DB::update('update inhouse_orders set sprayer_quantity = sprayer_quantity +"'.request('quantity').'",carp_quantity = "'.$order->finished_quantity.'" where worker_id = "'.request('sprayer_id').'" AND product_key = "'.$order->product_key.'"');
                    return redirect()->route('s2')->with(Session::flash('message',"Sprayer Job Successfully Updated. " ));
                }
                else
                    {
                        DB::table('inhouse_orders')->where(['worker_id' => request('sprayer_id')])
                                ->where(['product_key' => $order->product_key])->delete();
                        Inhouse_order::create([
                                'order_id'=>$order->id,
                                'user_id'=>$order->user_id,
                                'product_key'=>$order->product_key,
                                'worker_id'=>$order->sprayer_id,
                                'sprayer_quantity'=>$order->sprayer_quantity,
                                'carpenter_id'=>$order->carpenter_id,
                                'carp_quantity'=>$order->finished_quantity
                            ]);
                        return redirect()->route('s2')->with(Session::flash('message',"Sprayer Job Allocated Successfully . " ));
                       // return back()->withERRORS(['message'=>'user exist']);
                    }
                }
            }
            else
            {
                if(request('quantity') == 0 )
                {
                    return back()->withERRORS(['message'=>'Carpenter Job Not Submitted']);
                }else{
                if(request('quantity') == 1)
                {
                  $order->finished_quantity = $order->quantity;
                  $order->current_quantity =$order->quantity;
                    $order->status = 1;
                    $order->save();
                    return redirect()->route('s1')->with(Session::flash('message'," Carpenter Job Completed Successfully. " )); 
                }
                }
            }
        }
        
        return back()->with(Session::flash('message',"Worker Successfully Allocated. " ));
    }

    public function lampatch($id,$user,$admin,$carps)
    {
        $order = Client_order::findorfail($id);
        if(request('name_id'))
        {   
            if($order->total+request('completed') > $order->finished_quantity){
                return back()->withERRORS(['message'=>'Your can not add more than the quantity in store']);
            }else{
            $order->total+=request('completed');
            $order->status = 4;
            $order->save();
            $count=DB::table('stocks')->where('stock_name','=',$order->product_key)->where('order_id',$order->id)->count();
                if($count > 0)
                {
                    DB::table('stocks')->where('stock_name','=',$order->product_key)->where('order_id',$order->id)->update(['total_goods' =>$order->total]);
                }
                else{
                    //DB::table('stocks')->where('stock_name','=',$order->product_key)->delete();
                   Stock::create([
                    'order_id'=>$order->id,
                    'stock_name'=>$order->product_key,
                    'type'=>$order->item_type,
                    'size'=>$order->item_size,
                    'design_ref'=>$order->design_ref,
                    'total_goods'=>$order->total,
                    'remainder_goods'=>$order->total
                ]);
                    
                }
            }
            
        }
        elseif( request('total') > request('quantity') )
        {
            return back()->withERRORS(['message'=>'Your can not take more than the quantity in store']);
        }
        else{
        //calculating the amount for the order
            
            if(request('laminate_id')){
                $order->laminate_id =request('laminate_id');
                $order->sprayer_quantity +=request('quantity');
                $order->status = 3;
                $order->save();
                $count=Inhouse_order::get()->where('worker_id',request('laminate_id'))->where('product_key',$order->product_key)
                                                  ->count();
                if($count)
                {
                    DB::update('update inhouse_orders set laminate_quantity = laminate_quantity +"'.request('quantity').'",carp_quantity = "'.$order->finished_quantity.'" where worker_id = "'.request('laminate_id').'" AND product_key = "'.$order->product_key.'"');
                    
                    return back()->with(Session::flash('message',"Worker Allocated Job Successfully Updated. " ));
                }
                else{
                    DB::table('inhouse_orders')->where(['worker_id' => request('laminate_id')])
                            ->where(['product_key' => $order->product_key])->delete();
                    Inhouse_order::create([
                            'order_id'=>$order->id,
                            'user_id'=>$order->user_id,
                            'product_key'=>$order->product_key,
                            'worker_id'=>$order->laminate_id,
                            'sprayer_quantity'=>$order->laminate_quantity,
                            'carpenter_id'=>$order->laminate_id
                        ]);
                   // return back()->withERRORS(['message'=>'user exist']);
                }
                
            }
            else
            {
                if( request('quantity') == 0 )
                {
                    return back()->withERRORS(['message'=>'Carpenter Job Not Completed']);
                }else{
                if(request('quantity') == 1)
                {
                  $order->finished_quantity = $order->quantity;
                    $order->status = 1;
                    $order->save();
                    return back()->with(Session::flash('message'," Carpenter Job Completed Successfully. " )); 
                }
                }
            }
        }
        
        return back()->with(Session::flash('message',"Worker Successfully Allocated. " ));
    }

    public function delete($id)//OR Post $post
    {
        Client_order::findorfail($id)->delete();
        return back()->with(Session::flash('message'," Order Deleted Successfully. " ));
    }
    public function update(Request $request , $id)
    {
        $clients = Client_order::findorfail($id);


        $input = $request->all();

        $clients->fill($input)->save();
       
        return back()->with(Session::flash('message',  "' Completed Successfully. " ));
    }

    public function lamupdate(Request $request , $id)
    {
        $clients = Client_order::findorfail($id);

        if(request('remarks'))
        {
            $input = $request->all();

        $clients->fill($input)->save();
    }else{
        $clients->status +=3;
        $clients->save();
    }
        
       
        return back()->with(Session::flash('message',  "' Completed Successfully. " ));
    }

    public function ordershow()
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
        return view('/view_ordertrack',$userdata);
    }

    public function showLam() {
        $orders=Client_order::all(array('id','client_id','upholstery_id','sprayer_id','user_id','carpenter_id','product_key','upholstery_quantity','sprayer_quantity','finished_quantity','quantity'));
        $carps=Carpenter_info::all(array('id','name'));
        $clients=Client_info::all(array('id','client_name'));
        $items= Goods_item::all();
        $designs=Goods_item_design::all();
        $lam=Carpenter_info::all()->where('department','laminate');
        $userdata = array(
            'orders'=>$orders,
            'carps'=>$carps,
            //'sprays'=>$sprays,
            //'ups'=>$ups,
            'clients' => $clients,
            'items' => $items,
            'designs' => $designs,
            'lam' => $lam
            );
        return view('/registration/order-laminate',$userdata);
    }

}
