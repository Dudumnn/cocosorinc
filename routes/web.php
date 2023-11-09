<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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

//show - show a single data
//create - show a form to create a user
//store - store a data
//edit - show a form to edit a data
//update - update a data
//destroy - delete a data

Route::get('/', [UserController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);

Route::post('/store', [UserController::class,'store']);

Route::post('/logout', [UserController::class,'logout']);

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);