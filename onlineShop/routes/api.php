<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
  Route::get('/productsShopBrand/{id}', [ProductController::class, 'filterByBrand'])->name('filterByBrand');    
  Route::get('/productsShopCategory/{id}', [ProductController::class, 'filterByCategory'])->name('filterByCategory');
  Route::apiResource('productsShop', ProductController::class);
  Route::apiResource('categories', CategoryController::class);
  Route::apiResource('brands', BrandController::class);
  Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::post('login',[UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'store'])->name('users.store');


