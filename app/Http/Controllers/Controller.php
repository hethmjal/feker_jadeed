<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


   /*  public function store(Request $request){
        $date = $request->date;
        $day = date('D', strtotime($date));


        $fromhours = ["12"=>"12:30","12:30"=>"1","1"=>"1:30","1:30"=>"2","2"=>"2:30","2:30"=>"3","3"=>"3:30","3:30"=>"4",
        "4"=>"4:30","4:30"=>"5","5"=>"5:30",'5:30'=>"6","6"=>"6:30","6:30"=>"7","7"=>"7:30","7:30"=>"8"];
        foreach ($fromhours as $key => $value) {
            if ($request->from == $key) {
                $request->merge(['to'=>$value]);

            }
        }


        $request->merge(['day'=>$day,'user_id'=>Auth::id()]);

    Appointment::create($request->all());

     return to_route('appointment');

    } */

   public function getApp(Request $request){
        $apps = Appointment::where('date',$request->date)->get();
    $to = [];
    $from = [];
        foreach ($apps as $app) {
            array_push($to,$app->to);
            array_push($from,$app->from);

        }
        return ["to"=>$to,'from'=>$from];
    }
}
