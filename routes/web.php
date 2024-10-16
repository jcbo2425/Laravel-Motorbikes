<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MotorbikeController;

Route::resource('motorbikes', MotorbikeController::class);
