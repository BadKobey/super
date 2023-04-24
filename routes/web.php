<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::resource('/', App\Http\Controllers\Admin\IndexController::class);
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::resource('organizations', App\Http\Controllers\Admin\OrganizationController::class);
    Route::resource('transports', App\Http\Controllers\Admin\TransportController::class);
    Route::resource('brands', App\Http\Controllers\Admin\BrandController::class);
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);

});

Route::group(['prefix' => 'profile'], function() {
    Route::resource('/', App\Http\Controllers\Profile\IndexController::class);
    Route::resource('organizations', App\Http\Controllers\Profile\OrganizationController::class);
    Route::resource('transports', App\Http\Controllers\Profile\TransportController::class);
    Route::resource('products', App\Http\Controllers\Profile\ProductController::class);
});

