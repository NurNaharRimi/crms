<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\StaffController;

use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\CarController;
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

Route::get('/', function () {
    return view('welcome');
});

//staff
Route::get("/staff",[StaffController::class,'staffFrom'])->name('staff.from');
//driver
Route::get("/driver",[DriverController::class,'driverFrom'])->name('driver.from');
//car
Route::get("/Car",[CarController::class,'carFrom'])->name('car.from');
