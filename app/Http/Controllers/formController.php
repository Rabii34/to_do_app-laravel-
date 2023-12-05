<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    public function register(){
        return view('/');
    }
    public function data(Request $request){
       print_r($request->all());
       $request->validate([
        'name'=>'required',
        'email'=>'required | email',
        'password'=>'required'
       ]);
       $info=new form();
       $info->name=$request['name'];
       $info->email=$request['email'];
       $info->pass=$request['password'];
       $info->save();
       return redirect('/');

    }
    public function view(){
        $regData=Form::all();
        $data=compact('regData');
        return view('form')->with($data);
    }
    public function dlt($id){
       $find=Form::find($id)->delete();
       return redirect('/');
    }
}
