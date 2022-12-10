<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $subscriptions = Subscription::orderBy('date')->get();
        return view('admin.subscription.index',['subscriptions'=>$subscriptions]);
    }
    public function subscription($status){
      //  return 0;
        $subscriptions = Subscription::orderBy('date')->where('status',$status)->get();
        return view('admin.subscription.index',['subscriptions'=>$subscriptions]);
    }
}
