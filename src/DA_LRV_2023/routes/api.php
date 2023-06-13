<?php

use App\Http\Controllers\API\group_usercontroller;
use App\Http\Controllers\API\groupcontroller;
use App\Http\Controllers\API\noticecontroller;
use App\Http\Controllers\API\noticeforusercontroller;
use App\Http\Controllers\API\usercontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('user',[usercontroller::class,'index']);

Route::get('group',[groupcontroller::class,'index']);

Route::get('groupuser',[group_usercontroller::class,'index']);

Route::get('noticeuser',[noticeforusercontroller::class,'index']);

Route::get('notice',[noticecontroller::class,'index']);