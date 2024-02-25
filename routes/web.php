<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Home
Route::get('/', [HomeController::class, 'home']);

//Product
Route::prefix('product')->group(function () {
    Route::get('/category/foodBeverage', [ProductController::class, 'foodBeverage']);
    Route::get('/category/beautyHealth', [ProductController::class, 'beautyHealth']);
    Route::get('/category/homeCare', [ProductController::class, 'homeCare']);
    Route::get('/category/babyKid', [ProductController::class, 'babyKid']);
});

//User
Route::get('/user/{id}/{name}', [UserController::class, 'user']);

//Sales
Route::get('/sales', [SalesController::class, 'sales']);