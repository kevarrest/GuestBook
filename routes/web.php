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
    return view('daftarTamu');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/success', [App\Http\Controllers\GuestController::class, 'success']);
Route::post('/addGuest', [App\Http\Controllers\GuestController::class, 'addGuest']);

Route::get('/oid', [App\Http\Controllers\OIDController::class, 'basicClient']);