<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReceiptController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

    # 実行処理
    // Route::get('/execute', [SampleController::class, 'execute']);
    // Route::get('/execute', [ReceiptController::class, 'execute']);

    Route::get('/store', [ReceiptController::class, 'store']);
    Route::get('/restore', [ReceiptController::class, 'restore']);

