<?php

use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\AdminController;
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

Route::group(['middleware'=>'CheckLogin'], function(){
    Route::get('/admin/home',[AdminHomeController::class,'index'])->name('admin');
    Route::get('/admin/images',[AdminHomeController::class,'indexImage']);
});




Route::get('/login',[AdminController::class,'index'])->name('login');
Route::post('/login',[AdminController::class,'login'])->name('loginPost');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');
