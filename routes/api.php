<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CurrencyController;
use App\Http\Controllers\API\TipController;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\WalletController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '','namespace' => ''], function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('currencies', CurrencyController::class);
    Route::apiResource('tips', TipController::class);
    Route::apiResource('transactions', TransactionController::class);
    Route::apiResource('wallets', WalletController::class);
});