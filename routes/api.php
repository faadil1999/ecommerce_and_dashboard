<?php

use App\Http\Controllers\APIProductController;
use App\Http\Controllers\AuthController;
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

Route::post('login', [AuthController::class , 'authenticate']);

Route::get('products',[APIProductController::class , 'products']);

Route::get('products/product/{id}',[APIProductController::class , 'product']);

Route::get('dashboard',[AuthController::class,'dashboard'])->middleware('auth:sanctum');