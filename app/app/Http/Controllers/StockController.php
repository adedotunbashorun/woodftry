<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Stock;
use App\Goods_item_design;
use App\Sale;
use App\Client_request;
use App\Client_info;
use App\Client_order;
class StockController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
        return view('session/login');
    }

    public function index()
    {
    	$stock= Stock::where('remainder_goods','!=',0)->orderBy('id','desc')->get();
        $orders = Client_order::all();
        $goods=Goods_item_design::all();
    	return view('stock.stockview',compact('stock','goods','orders'));
    }

    public function store()
    {
    	$this->validate(request(),[
            
            'stock_name'=>'required'
        ]);

        //calculating the amount for the order
        
        Stock::create([
            
            'stock_name'=>request('stock_name')
        ]);

        return back()->with(Session::flash('message'," Stock Added Successfully. " ));
    }

    public function show($id)
    {
    	$stock = Stock::findorfail($id);
    	return view('/stock/stocksale',compact('stock'));
    }

    public function makesale($id)
    {
    	$stock = Stock::findorfail($id);
        $orders= Client_info::all();
        $good=Goods_item_design::where('design_ref',$stock->design_ref)->first();
    	return view('/stock/sale',compact('stock','good','orders'));
    }

    public function update( $id)
    {
    	$stock = Stock::findorfail($id);
    	$this->validate(request(),[
            'total_goods'=>'required',
            //'rate'=>'required',
            'size'=>'required',
            'type'=>'required'
        ]);

        //calculating the amount for the order
        //$amount = request('total_goods') * request('rate');

        	$balance = $amount;
           $stock->total_goods+=request('total_goods');
           //$stock->rate=request('rate');
           $stock->remainder_goods+=request('total_goods');
           $stock->type=request('type');
           $stock->size=request('size');
           //$stock->amount+=$amount;
           //$stock->balance+=$balance; 
    	   $stock->save();
        return back()->with(Session::flash('message',  " Stock inventory Successfully. " ));
    }
    
    public function patch( $id)
    {
    	$stock = Stock::findorfail($id);
    	if( request('total_goods') < request('quantity') )
    	{
    		return back()->withERRORS(['message'=>'Your Order Can not be Greater than Stock']);
    	}else{
        //calculating the amount for the order
	        $rem = request('total_goods') - request('quantity');
	        $stock->remainder_goods=$rem;
            $stock->sold_goods+= request('quantity');
	    	$stock->save();
    	}

    	$this->validate(request(),[
            'stock_name'=>'required',
            'customer_name'=>'required',
            'quantity'=>'required',
            //'rate'=>'required'
        ]);
        $count=DB::table('sales')->where('stock_id',$stock->id)->where('stock_name',$stock->stock_name)->where('customer_id',request('customer_name'))->count();
            if($count >  0)
            {
                DB::update('update sales set quantity = quantity +"'.request('quantity').'" where stock_id = "'.$stock->id.'" AND customer_id = "'.request('customer_name').'" order By created_at desc limit 1');
                DB::table('client_requests')->where('product_key',$stock->stock_name)->where('client_id',request('customer_name'))->update(['status' => 4]);
                return back()->with(Session::flash('message',"Client Request Successfully Delivered. " ));
            }
            else{
        //calculating the amount for the order
                Sale::create([
                    'stock_id'=>request('stock_id'),
                    'stock_name'=>request('stock_name'),
                    'customer_id'=>request('customer_name'),
                    'quantity'=>request('quantity'),
                    //'rate'=>request('rate'),
                    'sales_rep'=>auth()->user()->name,
                    'sale_rep_id'=>auth()->user()->id 
                ]);
                DB::table('client_requests')->where('product_key',$stock->stock_name)->where('client_id',request('customer_name'))->update(['status' => 4]);
            }

        return back()->with(Session::flash('message'," Sales Successfully. " ));
    }

   	public function showstock()
   	{
   		$stocks=Stock::all();
        $clients=Client_info::all();
        $goods=Goods_item_design::all();
   		return view('stock/stockhistory',compact('stocks','goods','clients'));
   	}
}
