<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpController;
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

//show - show a single data
//create - show a form to create a user
//store - store a data
//edit - show a form to edit a data
//update - update a data
//destroy - delete a data

Route::get('/', [EmpController::class, 'index']);
Route::get('/register', [EmpController::class, 'register']);
Route::get('/login', [EmpController::class, 'login']);
Route::post('/store', [EmpController::class,'store']);

Route::get('/login/process', [EmpController::class, 'process']);