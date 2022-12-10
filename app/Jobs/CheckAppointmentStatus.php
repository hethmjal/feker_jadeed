<?php

namespace App\Jobs;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CheckAppointmentStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       $now =  Carbon::now()->format("Y-m-d H:i");
       $today_date = Carbon::now()->format('Y-m-d  H:i');
       $appointments = Appointment::where('date',Carbon::now()->format('Y-m-d'))->get();
       foreach ($appointments as  $app) {
        $to_date = Carbon::parse($app->to)->format("Y-m-d H:i");
            if ($now >= $to_date) {
                $app->status = 'منتهي';
                $app->save();
            }

       }

    }
}
