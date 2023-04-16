<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KYProductsController;

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

Route::get('/products', [KYProductsController::class, 'index']);
Route::post('/products', [KYProductsController::class, 'create']);
Route::put('/products/{pid}', [KYProductsController::class, 'update']);
Route::delete('/products/{pid}', [KYProductsController::class, 'delete']);



Route::get('/test', function () {
    $var="woot woot, I can write in PHP";
    return($var);
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
