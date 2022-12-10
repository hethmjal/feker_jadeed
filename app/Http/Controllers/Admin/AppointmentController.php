<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Plan;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::orderBy('date')->get();
        return view('admin.appointment.index',['appointments'=>$appointments]);
    }
    public function appointment($status){
      //  return 0;
        $appointments = Appointment::orderBy('date')->where('status',$status)->get();
        return view('admin.appointment.index',['appointments'=>$appointments]);
    }

}
