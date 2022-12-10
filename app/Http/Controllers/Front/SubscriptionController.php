<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SubscriptionController extends Controller
{

    public function index($id){

        $plan = Plan::findOrFail($id);
        if(Auth::check()){
            $subscription = Subscription::where('user_id',Auth::id())->where('status','جديد')->first();

            if ($subscription) {
                return to_route('all-appointments')->with('success','لا يمكن الاشتراك لديك اشتراك فعال حاليا');

            }
            $date =date("Y-m-d");
            $data=[];
            $data['date']=$date;
            $data['user_id']=Auth::id();
            $data['plan_id']=$plan->id;
            $subscription = Subscription::create($data);
            return to_route('all-appointments')->with('success','تم الاشتراك بنجاح  يمكنك البدء بحجز مواعيد');
        }
        return view('front.subscribe',['plan'=>$plan]);
    }



    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
        ]);

       $user = $this->create_user($request);
       $date =date("Y-m-d");
        $request->merge([
            'user_id'=>$user->id,
            'date'=>$date
        ]);

      $subscription = Subscription::create($request->all());
      return to_route('all-appointments')->with('success','تم الاشتراك بنجاح  يمكنك البدء بحجز مواعيد');
    }


    public function create_user(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        return $user;
    }
}
