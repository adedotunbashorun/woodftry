<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Carpenter_info;
use App\Inhouse_order;
use App\Client_order;
class CarpenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        return view('session/login');
    }

    public function create()
    {
    	return view('registration.carpenter');
    }
    
    public function store(Request $request)
    {
    	$this->validate(request(),['name'=>'required','sex'=>'required','employment_date'=>'required','department'=>'required']);
        $carpenter=Carpenter_info::create($request->all());
    	return redirect()->route('workers')->with(Session::flash('message'," Worker Added Successfully. " ));
    }

    public function show()
    {
        $carpenter=Carpenter_info::all(array('id','name','email','phone','sex','state','department','employment_date'));
        $ups=Inhouse_order::all(array('id','worker_id','upholstery_quantity','sprayer_quantity'));
        //$spray=Inhouse_order::all(array('id','worker_id',));

        return view('/view_carpenter',compact('carpenter','ups'));
    }

    public function view()
    {
        $all=Carpenter_info::where('id',request('id'))->get();
        foreach ($all as $all) {
            $dept= $all->department;
        }
        if($dept == 'carpentry')
        {
            $carps=Client_order::where('carpenter_id',request('id'))->get();
        }
        elseif($dept == 'spray')
        {
            $carps=Client_order::where('sprayer_id',request('id'))->get();
        }else{
            $carps=Client_order::where('upholstery_id',request('id'))->get();
        }
        return view('/view',compact('carps','all'));
    }

    public function delete($id)//OR Post $post
    {
        
        Carpenter_info::findorfail($id)->delete();
        return back()->with(Session::flash('message'," Carpenter Deleted Successfully. " ));
    }

    public function edit($id)
    {
        $users=Carpenter_info::findorfail($id);
        return view('/registration.workers',compact('users'));
    }

    public function update(Request $request , $id)
    {
        $user = Carpenter_info::findorfail($id);


        $input = $request->all();

        $user->fill($input)->save();
       
        return redirect()->route('workers')->with(Session::flash('message',  "' Update Completed Successfully. " ));
    }
}
