<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[MenuController::class,'menu']);
Route::get('/dine_in',[OrderController::class,'dine_in']);
Route::get('/take_away',[OrderController::class,'take_away']);
Route::post('/order',[OrderController::class,'order']);
Route::post('/order/save',[OrderController::class,'order_quantity']);


Auth::routes();
Route::middleware(['auth'])->group(function (){
    Route::get('/admin',[AdminController::class,'menu']);
    Route::get('/admin/open',[AdminController::class,'orderList']);
    Route::get('/admin/deliver/{id}',[AdminController::class,'deliver']); 
    Route::post('/admin/reports',[AdminController::class,'report']);

    Route::get('/menu/add',[MenuController::class,'addMenu']);
    Route::post('/menu/save',[MenuController::class,'saveMenu']);
    Route::get('/menu/edit/{id}',[MenuController::class,'editMenu']);
    Route::post('/menu/update/{id}',[MenuController::class,'updateMenu']);
    Route::get('/menu/delete/{id}',[MenuController::class,'deleteMenu']);
});
