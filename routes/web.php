<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::prefix('/')->group(function(){
    include "_/frontend.php";
});
Route::prefix('admin')->group(function(){
    include "_/admin.php";
});
// middleware('auth')->

// Route::prefix('admin')->group(function(){
//     Route::get('/', [AdminController::class, 'showDashboard']);
//     Route::resource('vtour', VtourController::class);
//     Route::resource('admin', AdminController::class);
//     Route::resource('foto', FotoController::class);
//     Route::resource('video', VideoController::class);
// });


Route::get('login', [AuthController::class, 'login']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);
