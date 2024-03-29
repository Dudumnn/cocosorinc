<?php

use App\Http\Controllers\AuthController;
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

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/output', [AuthController::class, 'output']);
Route::post('/addoutput', [AuthController::class, 'addoutput']);
Route::put('/editOutput/{id}', [AuthController::class, 'editOutput']);

Route::get('/users', [AuthController::class, 'index']);
Route::put('/editProfile/{id}', [AuthController::class, 'editProfile']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/users', [AuthController::class, 'index']);
});*/