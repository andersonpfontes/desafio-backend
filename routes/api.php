<?php

use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\SellerController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('users')->group(function () {
    Route::get('', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('', [UserController::class, 'store']);

    Route::post('consumers', [ConsumerController::class, 'store']);
    Route::post('sellers', [SellerController::class, 'store']);
});

Route::prefix('transactions')->group(function () {
    Route::post('', [TransactionController::class, 'store']);
    Route::get('/{id}', [TransactionController::class, 'show']);
});

//$router->group(['prefix' => 'transactions'], function () use ($router) {
//
//    // "External" service for authorization, for sake of simplicity is included with current API
//    $router->post('authorize', function (Request $request) {
//        $value = $request->get('value');
//        if ($value >= 100.00) {
//            return response('Transação não autorizada', 401);
//        } else {
//            return response('OK');
//        }
//    });
//});
