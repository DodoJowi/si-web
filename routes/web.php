<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('Beranda', function  () {
	return view('Beranda');
});
Route::get('Produk', function  () {
	return view('Produk');
});
Route::get('Mitra', function  () {
	return view('Mitra');
});
Route::get('Karir', function  () {
	return view('Karir');
});
Route::get('About', function  () {
	return view('About');
});
Route::get('tester', function  () {
	return view('tester');
});

