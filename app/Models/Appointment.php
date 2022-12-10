<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['day','date','from','to','user_id','status','subscribe_id'];

    public function getarDayAttribute(){
        $days = ["Sat" => "السبت", "Sun" => "الأحد", "Mon" => "الإثنين", "Tue" => "الثلاثاء", "Wed" => "الأربعاء", "Thu" => "الخميس", "Fri" => "الجمعة"];
        foreach ($days as $key => $value) {
            if($key == $this->day){
               return $value;
            }
        }
    }

    public function getfromHourAttribute(){
       return Carbon::parse($this->from)->format("H:i");
    }

    public function gettoHourAttribute(){
        return Carbon::parse($this->to)->format("H:i");
     }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function subscribe(){
        return $this->belongsTo(Subscription::class,'subscribe_id');
    }
}
