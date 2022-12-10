<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Plan;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(){
        $subscribe = Subscription::where('user_id',Auth::id())->where('status','جديد')->first();
        $hours = ["12"=>"12:30","12:30"=>"1","1"=>"1:30","1:30"=>"2","2"=>"2:30","2:30"=>"3","3"=>"3:30","3:30"=>"4",
        "4"=>"4:30","4:30"=>"5","5"=>"5:30",'5:30'=>"6","6"=>"6:30","6:30"=>"7","7"=>"7:30","7:30"=>"8"];


//unset($hours["5:30"]);
      //  return $hours;
        return view('front.appointment.create',['subscribe'=>$subscribe,'hours'=>$hours]);
    }


    public function store(Request $request) {

      //  return $request->all();
      $fromhours =["12:00"=>"12:30","12:30"=>"13:00","13:00"=>"13:30","13:30"=>"14:00","14:00"=>"14:30","14:30"=>"15:00","15:00"=>"15:30",
      "15:30"=>"16:00",
      "16:00"=>"16:30","16:30"=>"17:00","17:00"=>"17:30",'17:30'=>"18:00","18:00"=>"18:30","18:30"=>"19:00","19:00"=>"19:30","19:30"=>"20:00"];
      foreach ($fromhours as $key => $value) {

          if ($request->from == $key) {
              $to =  Carbon::parse($request->date . " " .$value)->format("Y-m-d H:i");
              $request->merge(['to'=>$to]);
          }
      }

       $from =  Carbon::parse($request->date . " " .$request->from)->format("Y-m-d H:i");

       if($from <= Carbon::now()->format("Y-m-d H:i")) {
            return redirect()->back()->with('erorr','لا يمكن حجز موعد بهذا الوقت');
       }
       $request->merge(['from'=>$from]);

        $subscribe = Subscription::findOrFail($request->subscribe_id);
        if ($subscribe->sessions == $subscribe->plan->numberOfSessions) {
            return to_route('all-appointments')->with('error','لا يمكن اتمام الحجز, لقد تجاوزت الحد المسموح به');

        }
            $date = $request->date;
            $day = date('D', strtotime($date));

            $request->merge(['day'=>$day,'user_id'=>Auth::id()]);


            Appointment::create($request->all());
            $subscribe->sessions += 1;
            $subscribe->save();
            return to_route('all-appointments')->with('success','تم حجز الموعد بنجاح');
    }


    public function all(){

        $subscribe = Subscription::where('user_id',Auth::id())->where('status','جديد')->first();
        $appointments = Appointment::where('subscribe_id',$subscribe->id)->where('status','جديد')->orderBy('from')->get();
        $endAppointments = Appointment::where('subscribe_id',$subscribe->id)->where('status','منتهي')->orderBy('from')->get();
        return view('front.appointment.index',['subscribe'=>$subscribe,'appointments'=>$appointments,'endAppointments'=>$endAppointments]);

    }


    public function edit($id){
        $app = Appointment::findOrFail($id);
        $new = Carbon::parse($app->to)->subDays(1)->format("Y-m-d H:i");
        if (Carbon::now()->format("Y-m-d H:i") >= $new) {
            return to_route('all-appointments')->with('error','لا يمكن تعديل الموعد قبل 24 ساعة او أقل من بدأه');
        }

        return view('front.appointment.edit',['app'=>$app]);
    }



    public function update(Request $request,$id){
        $app = Appointment::findOrFail($id);
        $fromhours =["12:00"=>"12:30","12:30"=>"13:00","13:00"=>"13:30","13:30"=>"14:00","14:00"=>"14:30","14:30"=>"15:00","15:00"=>"15:30",
        "15:30"=>"16:00",
        "16:00"=>"16:30","16:30"=>"17:00","17:00"=>"17:30",'17:30'=>"18:00","18:00"=>"18:30","18:30"=>"19:00","19:00"=>"19:30","19:30"=>"20:00"];
        foreach ($fromhours as $key => $value) {

            if ($request->from == $key) {
                $to =  Carbon::parse($request->date . " " . $value)->format("Y-m-d H:i");
                $request->merge(['to'=>$to]);
            }
        }

         $from =  Carbon::parse($request->date . " " . $request->from)->format("Y-m-d H:i");
         $request->merge(['from'=>$from]);

         $app->update($request->all());

         return to_route('all-appointments')->with('success','تم تعديل الموعد بنجاح');
        }


    public function destroy($id){
        $app = Appointment::findOrFail($id);
        $new = Carbon::parse($app->to)->subDays(1)->format("Y-m-d H:i");
        if (Carbon::now()->format("Y-m-d H:i") >= $new) {
            return to_route('all-appointments')->with('error','لا يمكن حذف الموعد قبل 24 ساعة او أقل من بدأه');
        }
        $subscribe = Subscription::findOrFail($app->subscribe_id);
        $subscribe->sessions -=1;
        $subscribe->save();
        $app->delete();
        return to_route('all-appointments')->with('success','تم حذف الموعد بنجاح');
    }


    public function getApp(Request $request){
        $apps = Appointment::where('date',$request->date)->get();
        $hours=["12:00"=>"12:30","12:30"=>"13:00","13:00"=>"13:30","13:30"=>"14:00","14:00"=>"14:30","14:30"=>"15:00","15:00"=>"15:30",
        "15:30"=>"16:00",
        "16:00"=>"16:30","16:30"=>"17:00","17:00"=>"17:30",'17:30'=>"18:00","18:00"=>"18:30","18:30"=>"19:00","19:00"=>"19:30","19:30"=>"20:00"];
        $from = [];

        foreach ($apps as $app) {
            unset($hours[$app->from_hour]);

        }

        foreach ($hours as $key => $app) {
            array_push($from,$key);
        }

        return $from;
    }

}
