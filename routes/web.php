<?php

use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\Controllercekid;
use App\Http\Controllers\Controllerjoki;
use App\Http\Controllers\Controllerpayment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [Controllerjoki::class, 'home']);
Route::get('/servicerank', [Controllerjoki::class, 'servicerank']);
Route::post('/submitjoki', [Controllerjoki::class, 'submitjoki']);
Route::get('/payment', [Controllerpayment::class, 'payment']);
Route::post('/upload', [Controllerpayment::class, 'upload']);
Route::get('/cekid', [Controllercekid::class, 'cekid']);

Route::post('/cekid2', [Controllercekid::class, 'cekid2']);




Auth::routes([
    'reset' => false, 'verify' => true
]);

Route::get('/homeadmin', [App\Http\Controllers\ControllerAdmin::class, 'homeadmin'])->middleware('auth');
Route::get('/pesananadmin', [App\Http\Controllers\ControllerAdmin::class, 'pesananadmin'])->middleware('auth');
Route::get('/riwayatadmin', [App\Http\Controllers\ControllerAdmin::class, 'riwayatadmin'])->middleware('auth');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
