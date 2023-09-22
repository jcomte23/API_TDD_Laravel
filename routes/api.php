<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\ProductController as ProductControllerV1;
use App\Http\Controllers\Api\V2\ProductController as ProductControllerV2;
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
    Route::apiResource('products',ProductControllerV1::class);
    Route::apiResource('categories',CategoryController::class);
});

Route::prefix('v2')->middleware('guest:sanctum')->group(function () { 
    Route::apiResource('products',ProductControllerV2::class);
});


