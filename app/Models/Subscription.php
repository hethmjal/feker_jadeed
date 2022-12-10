<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['sessions','plan_id','user_id','status','date'];


    public function plan(){
        return $this->belongsTo(Plan::class,'plan_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function appointments(){
        return $this->hasMany(Appointment::class,'subscribe_id');
    }

}
