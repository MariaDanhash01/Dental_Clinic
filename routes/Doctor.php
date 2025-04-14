<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\Auth\AuthController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Doctor\Appointment\AppointmentController;

  //=================================== Auth Route =============================

Route::get('/login' , [AuthController::class , 'loginPage'])->name('login.page');

Route::post('/login/check' , [AuthController::class , 'login'])->name('login');

Route::group([ 'middleware' => 'doctor.auth'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //=================================== Dashboard Route =============================

    Route::get('/index', [DoctorController::class, 'index'])->name('index');


       //=================================== Appointment Route =============================

       Route::group(['prefix' => 'appointments', 'as' => 'appointments.', 'controller' => AppointmentController::class], function () { 

           Route::get('/create',  'create')->name('create');

           Route::get('/{status?}', 'index')->name('index')->defaults('status', 'all');

           Route::post('/store','store')->name('store');

           Route::get('/{appointment}/edit', 'edit')->name('edit');

           Route::put('/{appointment}', 'update')->name('update');

           Route::put('/{appointment}/cancel', 'cancel')->name('cancel');

           Route::put('/{appointment}/complete', 'complete')->name('complete');

    });

});