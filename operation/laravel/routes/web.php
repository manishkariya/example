<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\controllers\homecontroller;

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
Route::get('/',[homecontroller::class,'index']);
Route::post('/',[homecontroller::class,'store']);
Route::get('/',[homeController::class,'show']);
Route::get('/edittask/{id}',[homecontroller::class,'edit']);
Route::post('/edittask/{id}',[homecontroller::class,'update']);
Route::get('//{id}',[homecontroller::class,'destroy']);