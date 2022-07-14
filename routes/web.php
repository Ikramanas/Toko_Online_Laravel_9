<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin_dashboardController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\BarangController;
// use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;


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

Route::get('/logout', [LoginController::class,'logout'])->name('logout')->middleware('auth');

    Route::group(['middleware' => ['auth','isAdmin:1']], function ()
    {
        Route::get('/admin_dashboard/', [Admin_dashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/data_pengguna', [UserController::class, 'index'])->name('data.pengguna');
        Route::DELETE('/hapus_pengguna/{id}', [UserController::class, 'delete'])->name('user.delete');

        // Route::get('/kategori', [KategoriController::class,'index'])->name('index.kategori');
        // Route::get('/tambah_kategori', [KategoriController::class, 'create'])->name('tambah.kategori');
        // Route::POST('/store_kategori', [KategoriController::class, 'store'])->name('store.kategori');

        Route::resource('kategori', KategoriController::class);
        Route::resource('barang', BarangController::class);

       
    });
    Route::group(['middleware' => 'auth','isAdmin:2'], function ()
    {
        Route::get('/seller', [SellerDashboardController::class,'index'])->name('seller.dashboard');
    });
    Route::group(['middleware' => 'auth','isAdmin:3'], function ()
    {
        Route::get('/dashboard', [UserController::class,'index'])->name('user.dashboard');
    });

