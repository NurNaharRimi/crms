<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\StaffController;

use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\CarController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CategorieController;
use App\Http\Controllers\Backend\CustomerController;
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

//admin
Route::get("/admin/from",[AdminController::class,'adminFrom'])->name('admin.from');
Route::get("/admin",[AdminController::class,'adminlist'])->name('admin.list');
Route::post("/admin/create",[AdminController::class,'admincreate'])->name('admin.create');

//staff
Route::get("/staff/from",[StaffController::class,'staffFrom'])->name('staff.from');
Route::get("/staff",[StaffController::class,'stafflist'])->name('staff.list');
//driver
Route::get("/driver/from",[DriverController::class,'driverFrom'])->name('driver.from');
Route::get("/driver",[DriverController::class,'driverlist'])->name('driver.list');
//car
Route::get("/Car/from",[CarController::class,'carFrom'])->name('car.from');
Route::get("/Car",[CarController::class,'carlist'])->name('car.list');
//booking
Route::get("/booking/from",[BookingController::class,'bookingFrom'])->name('booking.from');
Route::get("/booking",[BookingController::class,'bookinglist'])->name('booking.list');
//categorie
Route::get("/categorie/from",[CategorieController::class,'categorieFrom'])->name('categorie.from');
Route::get("/categorie",[CategorieController::class,'categorielist'])->name('categorie.list');
//customer
Route::get("/customer/from",[CustomerController::class,'customerFrom'])->name('customer.from');
Route::get("/customer",[CustomerController::class,'customerlist'])->name('customer.list');
