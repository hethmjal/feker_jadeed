<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Plan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $plans = Plan::get();
        return view('front.index',['plans'=>$plans]);
    }

    public function login(){
        return view('front.login');
    }


    public function contactus(Request$request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',

        ]);

       $message =  Message::create($request->all());
        return $message;
    }

}
