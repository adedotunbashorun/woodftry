<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Client_info;
class SalesController extends Controller
{
     public function show()
    {
    	$sales=Sale::where('id','!=',0)->orderBy('id','desc')->get();
    	$clients=Client_info::all();
    	return view('stock/saleshistory',compact('sales','clients'));
    }

}
