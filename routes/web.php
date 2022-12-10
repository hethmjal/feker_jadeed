<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\AppointmentController as FrontAppointmentController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\SubscriptionController as FrontSubscriptionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// dashboard


Route::middleware(['auth','checkUserType'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('/dashboard')->as('dashboard.')->middleware(['auth','checkUserType'])->group(function () {
    Route::get('/',function(){
        return view('admin.index');
    });
    Route::prefix('appointments')->group(function(){
        Route::get('/', [AppointmentController::class, 'index'])->name('appointments');
        Route::get('/{status}', [AppointmentController::class, 'appointment'])->name('customappointments');

    });


    Route::prefix('subscription')->group(function(){
        Route::get('/', [SubscriptionController::class, 'index'])->name('subscription');
        Route::get('/{status}', [SubscriptionController::class, 'subscription'])->name('customsubscription');

    });
});









//Front

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/message',[HomeController::class,'contactus'])->name('contactus');


Route::get('login', [HomeController::class, 'login'])->middleware('guest')
->name('front.login');

Route::get('subscribe/{id}', [FrontSubscriptionController::class, 'index'])
->name('front.subscribe');


Route::post('/subscribe',[FrontSubscriptionController::class,'store'])->name('front.subscription.store');
Route::get('/create-appointment',[FrontAppointmentController::class,'index'])->middleware('auth')->name('create-appointment');

Route::post('/store-appointment',[FrontAppointmentController::class,'store'])->middleware('auth')->name('store-appointment');
Route::get('/appointments',[FrontAppointmentController::class,'all'])->middleware('auth')->name('all-appointments');
Route::get('appointment/get',[FrontAppointmentController::class,'getApp'])->middleware('auth')->name('appointment.get');
Route::get('appointment/edit/appointment/get',[FrontAppointmentController::class,'getApp'])->middleware('auth')->name('appointment.get');

Route::get('appointment/edit/{id}',[FrontAppointmentController::class,'edit'])->middleware('auth')->name('appointment.edit');
Route::post('appointment/update/{id}',[FrontAppointmentController::class,'update'])->middleware('auth')->middleware('auth')->name('appointment.update');

Route::get('appointment/{id}',[FrontAppointmentController::class,'destroy'])->middleware('auth')->name('appointment.delete');

require __DIR__.'/auth.php';
