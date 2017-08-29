<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class SessionController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }
	
	public function create()
	{
		return view('session/login');
	}
	public function store()
	{
		$this->validate(request(),['email'=>'required|email','password'=>'required|min:6']);
		if (! auth()->attempt(request(['email','password'])))
		{
			return back()->withErrors(['message'=>'please check your credentials and try again!']);
		}
		if(auth()->user()->access_level == '1')
		{
			return redirect()->home()->with(Session::flash('message', "" . auth()->user()->name . " SuperAdmin login  successfully. " ));
		}elseif(auth()->user()->access_level == '2'){
			return redirect()->home()->with(Session::flash('message', "" . auth()->user()->name . " Manager login  successfully. " ));
		}elseif(auth()->user()->access_level == '3'){
			return redirect()->home()->with(Session::flash('message', "" . auth()->user()->name . " Inspector login  successfully. " ));
		}else{
			return redirect()->home()->with(Session::flash('message', "" . auth()->user()->name . " SalesRep login  successfully. " ));
		}
	}
    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }

    
}
