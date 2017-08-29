<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        return view('session/login');
    }

    public function create()
    {
    	return view('registration.create');
    }
    
    public function store(Request $request)
    {
    	$this->validate(request(),['name'=>'required','email'=>'required|email','phone'=>'required','department'=>'required','access_level'=>'required','password'=>'required|min:6|confirmed']);
        $user=user::create($request->all());
    	return redirect()->route('users')->with(Session::flash('message'," User Added Successfully. " ));
    }

    public function show()
    {
        $users=User::where('id','!=',0)->orderBy('id','desc')->get();
        return view('/view_users',compact('users'));
    }

    public function delete($id)//OR Post $post
    {
        
        User::findorfail($id)->delete();
        return back()->with(Session::flash('message'," User Deleted Successfully. " ));
    }

    public function edit($id)
    {
        $users=User::findorfail($id);
        return view('/registration.show',compact('users'));
    }

    public function update(Request $request , $id)
    {
        $user = User::findorfail($id);


        $input = $request->all();

        $user->fill($input)->save();
       
        return redirect()->route('users')->with(Session::flash('message',  "' Update Completed Successfully. " ));
    }
}
