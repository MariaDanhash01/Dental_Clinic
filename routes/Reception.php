<?php

use App\Http\Controllers\Reception\Appointment\AppointmentController;
use App\Http\Controllers\Reception\Auth\AuthController;
use App\Http\Controllers\Reception\ReceptionController;
use Illuminate\Support\Facades\Route;


Route::get('/login' , [AuthController::class , 'loginPage'])->name('login.page');

Route::post('/login/check' , [AuthController::class , 'login'])->name('login');

Route::group([ 'middleware' => 'reception.auth'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //=================================== Dashboard Route =============================

    Route::get('/index', [ReceptionController::class, 'index'])->name('index');


       //=================================== Appointment Route =============================

       Route::group(['prefix' => 'appointments', 'as' => 'appointments.'], function () {
           Route::get('/create', [AppointmentController::class, 'create'])->name('create');
           Route::get('/{status?}', [AppointmentController::class, 'index'])->name('index')->defaults('status', 'all');
           Route::post('/', [AppointmentController::class, 'store'])->name('store');
           Route::get('/{appointment}/edit', [AppointmentController::class, 'edit'])->name('edit');
           Route::put('/{appointment}', [AppointmentController::class, 'update'])->name('update');
           Route::put('/{appointment}/cancel', [AppointmentController::class, 'cancel'])->name('cancel');
           Route::put('/{appointment}/complete', [AppointmentController::class, 'complete'])->name('complete');
       });


});