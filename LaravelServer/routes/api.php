<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





Route::group(['prefix' => 'user'], function(){
   
    Route::post('/register', [AuthController::class, 'register'])->name("register");
    Route::post('/login', [AuthController::class, 'login'])->name("login");
    Route::post('/logout', [AuthController::class, 'logout'])->name("logout");
});

Route::group(['prefix' => 'admin'], function(){
    
    Route::post('/add_category', [AdminController::class, 'addCategory'])->name("add_category");
    Route::post('/add_product', [AdminController::class, 'addProduct'])->name("add_product");
    Route::get('/all_categories', [AdminController::class, 'allCategories'])->name("all_categories");
    Route::get('/all_products', [AdminController::class, 'allProducts'])->name("all_products");

});
