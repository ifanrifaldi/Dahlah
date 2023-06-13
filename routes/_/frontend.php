<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'beranda'); 
    Route::get('vtour', 'vtour'); 
    Route::get('foto', 'foto'); 
    Route::get('video', 'video'); 
});