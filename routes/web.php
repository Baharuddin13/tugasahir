<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return redirect('/admin');
// });


//Dashboard
Route::get('/admin', 'App\Http\Controllers\admin\HomeController@index')->name('dashboard');

//Menu admin
Route::post('/store', 'App\Http\Controllers\admin\MenuController@store')->name('store');
Route::get('/editmenu/{id}', 'App\Http\Controllers\admin\MenuController@edit')->name('edit_menu');
Route::put('/update_menu', 'App\Http\Controllers\admin\MenuController@update')->name('update_menu');
Route::delete('/deletemenu/{id}', 'App\Http\Controllers\admin\MenuController@delete')->name('delete_menu');
Route::get('/menu', 'App\Http\Controllers\admin\MenuController@menu')->name('menu_admin');
Route::get('/tambahdata', 'App\Http\Controllers\admin\MenuController@tambahdata')->name('tambah.data');

//User admin
Route::get('/user', 'App\Http\Controllers\admin\UserController@user')->name('userr');
Route::get('/TambahDataUser', 'App\Http\Controllers\admin\UserController@TambahDataUser')->name('TambahDataUser');
Route::post('/ProsesUser', 'App\Http\Controllers\admin\UserController@InputUser')->name('ProsesUser');
Route::delete('/deleteuser/{id}', 'App\Http\Controllers\admin\UserController@delete')->name('delete_user');
Route::put('/update_user', 'App\Http\Controllers\admin\UserController@update')->name('update_user');
Route::get('/edit_user/{id}', 'App\Http\Controllers\admin\UserController@edit')->name('edit_user');

//Transaksi 
Route::get('/tambahdatatransaksi', 'App\Http\Controllers\admin\TransaksiController@tambahdatatransaksi')->name('tambah.data');
Route::get('/transaksi', 'App\Http\Controllers\admin\TransaksiController@transaksi')->name('transaksi');
Route::post('/ProsesTransaksi', 'App\Http\Controllers\admin\TransaksiController@InputTambah')->name('ProsesTransaksi');
Route::delete('/delettransaksi/{id}', 'App\Http\Controllers\admin\TransaksiController@delete')->name('delete_transaksi');
Route::put('/update_transaksi', 'App\Http\Controllers\admin\TransaksiController@update')->name('update_transaksi');
Route::get('/edit_transaksi/{id}', 'App\Http\Controllers\admin\TransaksiController@edit')->name('edit_transaksi');

//Login
Route::get('/login', [LoginController::class, 'tampilform'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Untuk ambil image id dan harga id untuk transaksi
Route::get('/get-image/{id}', 'App\Http\Controllers\admin\TransaksiController@getImage');
Route::get('/get-harga/{id}', 'App\Http\Controllers\admin\TransaksiController@getHarga');


// User
Route::get('/', 'App\Http\Controllers\user\UserController@user')->name('user');
Route::get('/about', 'App\Http\Controllers\user\UserController@about')->name('about');
Route::get('/menuu', 'App\Http\Controllers\user\UserController@menu')->name('menu');

// cetak
Route::get('/cetak/{id}', 'App\Http\Controllers\admin\TransaksiController@cetak')->name('cetak');
