<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin_DashboardController;

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

Route::get('/welcome', function () {
    return view('welcome')->name('welcome');
});

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/userRegist', [RegisterController::class,'create'])->name('userRegist');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/authenticate', [LoginController::class,'authenticate'])->name('authenticate');

Route::get('/seller', [DashboardController::class,'index'])->name('seller.index');

Route::group(['midleware' => ['auth']], function ()
{
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class,'logout'])->name('logout');

    Route::group(['middleware' => 'isAdmin'], function ()
    {
        Route::get('/admin_dashboard/', [admin_DashboardController::class,'index'])->name('admin_dashboard');
    });
    
    // Route::group(['middleware' => 'isCustomer'], function ()
    // {
    //     //
    // });
    
    Route::group(['middleware' => 'isSeller'], function ()
    {
    });
    
});

