<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\TabletsController;
use App\Http\Controllers\FormController;

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



Route::get('/',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store'])->name('register');

Route::get('/login',[LoginController::class,'index']);
Route::post('/check',[LoginController::class,'check'])->name('check');

Route::get('/login',[RegisterController::class]);

Route::get('/mobiles',[MobileController::class,'mobiles'])->name('mobiles');
Route::get('/buy',[MobileController::class,'add'])->name('buy');

Route::get('/laptops',[LaptopController::class,'laptops'])->name('laptops');
Route::get('/tablets',[TabletsController::class,'tablets'])->name('tablets');

Route::get('/index',[LoginController::class,'index'])->name('index');

Route::get('/home',[FormController::class,'home'])->name('home');