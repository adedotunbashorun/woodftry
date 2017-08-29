<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Goods_item;
class itemController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        return view('session/login');
    }

    
}
