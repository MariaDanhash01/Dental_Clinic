<?php

use App\Http\Controllers\StoreKeeperEmployee\Auth\AuthController;
use App\Http\Controllers\StoreKeeperEmployee\MedicalSupplies\MedicalSuppliesController;
use App\Http\Controllers\StoreKeeperEmployee\StoreKeeperEmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/login' , [AuthController::class , 'loginPage'])->name('login.page');

Route::post('/login/check' , [AuthController::class , 'login'])->name('login');

Route::group([ 'middleware' => 'storeKeeperEmployee.auth'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //=================================== Dashboard Route =============================

    Route::get('/index', [StoreKeeperEmployeeController::class, 'index'])->name('index');

        //=================================== Medical Supplies Route =============================

    Route::group(['prefix' => 'medicalSupplies', 'as' => 'medicalSupplies.', 'controller' => MedicalSuppliesController::class], function () { 

        Route::get('/index', 'index')->name('index');

        Route::get('/create', 'create')->name('create');

        Route::post('/store','store')->name('store');

        Route::delete('/delete/{id}','delete')->name('delete');

        Route::get('/edit/{id}', 'edit')->name('edit');

        Route::put('/update/{id}', 'update')->name('update');

    });

});