<?php

use App\Http\Controllers\StoreKeeperEmployee\Auth\AuthController;
use App\Http\Controllers\StoreKeeperEmployee\StoreKeeperEmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/login' , [AuthController::class , 'loginPage'])->name('login.page');

Route::post('/login/check' , [AuthController::class , 'login'])->name('login');

Route::group([ 'middleware' => 'storeKeeperEmployee.auth'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //=================================== Dashboard Route =============================

    Route::get('/index', [StoreKeeperEmployeeController::class, 'index'])->name('index');

});