<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RuanganController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\User_groupController;

use App\Http\Controllers\LoginController;


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

// Route::get('login', [LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});


Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['cekUserLogin:1']], function() {
            Route::get('/', function(){
                return view('admin.index');
            });
            Route::resource('ruangan', RuanganController::class);
            Route::resource('jenis_barang', JenisBarangController::class);
            Route::resource('barang', BarangController::class);
            Route::resource('user_group', User_groupController::class);
        });

    Route::group(['middleware' => ['cekUserLogin:2']], function() {
        Route::resource('barang', Barang::class);
    });
});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Inventory
// Route::group(['prefix'=>'inventory', 'middleware'=>['auth']], function() {
//     Route::get('/', function(){
//         return view('admin.index');
//     });
//     Route::resource('ruangan', RuanganController::class);
//     Route::resource('jenis_barang', JenisBarangController::class);
//     Route::resource('barang', BarangController::class);
//     Route::resource('user_group', User_groupController::class);
// });
