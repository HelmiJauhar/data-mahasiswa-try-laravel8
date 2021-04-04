<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


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

Route::get('/index', [MahasiswaController::class,'index']);
Route::get('/insert', [MahasiswaController::class,'insert']);
Route::get('/delete', [MahasiswaController::class,'delete']);
Route::get('/search', [MahasiswaController::class,'search']);
Route::get('/sortByNama', [MahasiswaController::class,'sortByNama']);
Route::get('/sortByIpk', [MahasiswaController::class,'sortByIpk']);
