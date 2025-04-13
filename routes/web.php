<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Patient\Auth\AuthController;
use App\Http\Controllers\Patient\PatientsController;

Route::get('/' , [PatientsController::class , 'index'])->name('index');

Route::group(['prefix' => 'patient', 'as' => 'patient.', 'controller' => PatientsController::class],function () { 

Route::get('/login' , [AuthController::class , 'loginPage'])->name('login.page');

Route::post('/login/check' , [AuthController::class , 'login'])->name('login');

Route::get('/register', [AuthController::class , 'registerPage'])->name('register.page');

Route::post('/register/check' , [AuthController::class , 'register'])->name('register');


Route::group([ 'middleware' => 'patient.auth'], function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile/edit', [AuthController::class, 'editProfile'])->name('profile.edit');

    Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');

    Route::get('/resetPassword/page' , [AuthController::class , 'resetPasswordPage'])->name('resetPassword.page');

    Route::post('/resetPassword' , [AuthController::class , 'resetPassword'])->name('resetPassword');
});
});