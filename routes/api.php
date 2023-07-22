<?php

use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::prefix('users')->group(function () {
    Route::get('', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('add', [UserController::class, 'store']);

    Route::post('consumers', [ConsumerController::class, 'store']);
    Route::post('sellers', [SellerController::class, 'store']);
});

Route::prefix('transactions')->group(function () {
    Route::post('', [TransactionController::class, 'store']);
    Route::get('/{id}', [TransactionController::class, 'show']);
});
