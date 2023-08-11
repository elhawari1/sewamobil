<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\SewaController;
use App\Http\Controllers\Admin\MobilController;

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


Route::controller(MobilController::class)->group(function (){
    Route::get('/', 'index')->name('mobil');
    Route::post('/mobil/insert', 'store');
});

Route::controller(AuthController::class)->group(function (){
    Route::get('/login', 'login')->name('login');
    Route::post('/login/proses', 'loginProses');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/login/proses', 'loginProses');
    Route::get('/register', 'register')->name('register');
    Route::post('/register/insert', 'storeRegister');
});

Route::controller(SewaController::class)->group(function (){
    Route::get('/sewa', 'index')->name('sewa');
});

