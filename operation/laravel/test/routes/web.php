<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeecontroller;
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

Route::get('/',[homeecontroller::class,'index']);
route::post('/',[homeecontroller::class,'store']);
route::get('/',[homeecontroller::class,'show']);
route::get('//{id}',[homeecontroller::class,'destroy']);