<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\UserController;
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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::prefix('v1')->middleware('guest:sanctum')->group(function () { 
    Route::post('login', [UserController::class,'login']);
    Route::apiResource('products',ProductController::class);
    Route::apiResource('categories',CategoryController::class);
});


