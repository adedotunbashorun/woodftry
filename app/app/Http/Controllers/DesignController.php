<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Goods_item;
use App\Goods_item_design;
class DesignController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        return view('session/login');
    }

    public function create(){
    	return view('/add_design');
    }
    
    public function store(Request $request)
    {
    	$this->validate(request(),['design_name'=>'required','design_ref'=>'required']);
        $user=Goods_item_design::create($request->all());
    	return back()->with(Session::flash('message'," Design Added Successfully. " ));
    }

    public function show()
    {
        $designs=Goods_item_design::all();
        return view('/view_design',compact('designs'));
    }

     public function delete($id)//OR Post $post
    {
        
        Goods_item_design::findorfail($id)->delete();
        return back()->with(Session::flash('message'," Design Deleted Successfully." ));
    }

    public function update(Request $request , $id)
    {
        $design = Goods_item_design::findorfail($id);
        $design->design_name=request('name');
        $design->design_ref = request('ref');
        $design->save();
       
        return back()->with(Session::flash('message',  "' Update Completed Successfully. " ));
    }

    public function itemcreate(){
        return view('/add_goods');
    }

    public function itemstore(Request $request)
    {
        $this->validate(request(),['item_name'=>'required','item_code_name'=>'required','item_ref'=>'required']);
        $user=Goods_item::create($request->all());
        return back()->with(Session::flash('message'," Goods Added Successfully. " ));
    }
    
    public function itemshow()
    {
        $items=Goods_item::all();
        return view('/view_goods',compact('items'));
    }

    public function itemdelete($id)//OR Post $post
    {
        //->withErrors(['message'=>'please check your credentials and try again!']);
        Goods_item::findorfail($id)->delete();
        return back()->with(Session::flash('message'," Goods Deleted Successfully. " ));
    }

    public function edit($id)//OR Post $post
    {
        //->withErrors(['message'=>'please check your credentials and try again!']);
        $items = Goods_item::findorfail($id);
        return view('/show_goods',compact('items'));
    }

    public function itemupdate(Request $request , $id)
    {
        $clients = Goods_item::findorfail($id);


        $input = $request->all();

        $clients->fill($input)->save();
       
        return back()->with(Session::flash('message',  "' Updated Successfully. " ));
    }
}
