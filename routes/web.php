<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/car', function () {
    return view('home', [
        'title' => 'branda',
        'active' => 'branda'
    ]);
})->middleware('auth');

Route::get('/daftar', function () {
    return view('mobil.daftar', [
        'title' => 'daftar',
        'active' => 'daftar'
    ]);
})->middleware('auth');

// pesanan
Route::resource('pesanan', PesananController::class)->middleware('auth');


// login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// register
Route::get('/regis', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/regis', [RegisterController::class, 'store']);
