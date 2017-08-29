<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Client_info;
class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        return view('session/login');
    }

    public function create()
    {
    	return view('registration.client');
    }
    
    public function store(Request $request)
    {
    	$this->validate(request(),['client_name'=>'required','client_email'=>'required|email','client_phone'=>'required','client_delivery_address'=>'required']);
        
        $client=Client_info::create($request->all());
    	return redirect()->route('client')->with(Session::flash('message'," Client Added Successfully. " ));
    }
    
    public function show()
    {
        $clients=Client_info::where('id','!=',0)->orderBy('id','desc')->get();
        return view('view_client',compact('clients'));
    }

    public function edit($id)
    {
        $clients=Client_info::findorfail($id);
        return view('/registration.edit',compact('clients'));
    }

    public function update(Request $request , $id)
    {
        $user = Client_info::findorfail($id);


        $input = $request->all();

        $user->fill($input)->save();
       
        return redirect()->route('client')->with(Session::flash('message',  "' Update Completed Successfully. " ));
    }

    public function delete($id)//OR Post $post
    {
        
        Client_info::findorfail($id)->delete();
        return back()->with(Session::flash('message'," Client information Deleted Successfully. " ));
    }
}
