<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PetController;

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


Route::resource('pets', PetController::class);
Route::get('/index',[PetController::class,'index']);
Route::get('/show-all',[PetController::class,'showAll']);