<?php

use App\Http\Controllers\KotaController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('provinsi', ProvinsiController::class);
Route::resource('kota', KotaController::class);
