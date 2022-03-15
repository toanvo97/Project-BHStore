<?php

use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\client\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('/san-pham/chi-tiet-san-pham/{id}',[HomeController::class,'detail']);

Route::get('/admin/home',[AdminHomeController::class,'index']);
Route::get('/admin/images',[AdminHomeController::class,'indexImage']);
