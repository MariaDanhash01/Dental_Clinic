<?php

use App\Http\Controllers\Reception\Auth\AuthController;
use App\Http\Controllers\Reception\ReceptionController;
use Illuminate\Support\Facades\Route;


Route::get('/login' , [AuthController::class , 'loginPage'])->name('login.page');

Route::post('/login/check' , [AuthController::class , 'login'])->name('login');

Route::group([ 'middleware' => 'reception.auth'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //=================================== Dashboard Route =============================

    Route::get('/index', [ReceptionController::class, 'index'])->name('index');

});