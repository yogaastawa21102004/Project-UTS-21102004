<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\latihan01;
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


Route::get('/project',[latihan01::class,'project']);

Route::get('/alat',[latihan01::class,'komponen']);

Route::get('/syntax',[latihan01::class,'code']);

Route::get('/',[latihan01::class,'Beranda']);

