<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FotoController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\VtourController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'showDashboard']);
Route::resource('vtour', VtourController::class);
Route::resource('admin', AdminController::class);
Route::resource('foto', FotoController::class);
Route::resource('video', VideoController::class);
Route::resource('user', UserController::class);


