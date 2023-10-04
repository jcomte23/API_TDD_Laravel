<?php

use App\Http\Controllers\Web\PersonalSettings;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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

Route::get('/',[PersonalSettings::class,'welcome'])->name('home');
Route::get('/products',[PersonalSettings::class,'products'])->name('products');
Route::get("locale/{locale}",[PersonalSettings::class,'setLang'])->name('lang');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[PersonalSettings::class,'dashboard'])->name('dashboard');
});
