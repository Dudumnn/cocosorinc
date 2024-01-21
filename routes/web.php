<?php

use App\Http\Controllers\leaveController;
use App\Http\Controllers\mobileController;
use App\Http\Controllers\PerfController;
use App\Http\Controllers\SchedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
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

Route::controller(UserController::class)->group(function(){
    Route::get('/', 'login')->middleware('guest');
    Route::get('/dashboard', 'index')->middleware('auth');
    //login process
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login/process', 'process');
    //create new account
    Route::get('/register', 'register')->middleware('guest');
    Route::post('/store', 'store');
    //logout
    Route::post('/logout', 'logout')->middleware('auth');

    Route::get('/staff', 'staff')->middleware('auth');
    Route::delete('/deleteHR/{id}', 'destroy')->middleware('auth');
});

Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->middleware('auth');

Route::controller(WorkerController::class)->group(function(){
    Route::get('/employees', 'employees')->middleware('auth');
    Route::get('/edit/worker', 'editWorker')->middleware('auth');
    Route::get('/worker/profile/{id}', 'profile')->middleware('auth');
    Route::get('/add', 'add')->middleware('auth');
    Route::post('/addEmployee', 'addEmployee')->middleware('auth');
    Route::get('/worker/profile/{id}', 'profile')->middleware('auth');
    Route::put('/editWorker/profile/{id}', 'update')->middleware('auth');
    Route::delete('/delete/profile/{id}', 'destroy')->middleware('auth');
    //Export List of Employees
    Route::get('/excelExport', 'export')->middleware('auth');
});

Route::controller(PerfController::class)->group(function(){
    Route::get('/weekly_performance', 'performance')->middleware('auth');
    Route::get('/fullReport', 'report')->middleware('auth');
    Route::get('/report', 'weekly')->middleware('auth');
    Route::post('/OutputImport', 'import')->middleware('auth');
    Route::delete('/delete/output/{id}', 'destroy')->middleware('auth');
    Route::get('/calculated/{id}', 'calculate')->middleware('auth');
});

Route::controller(SchedController::class)->group(function(){
    Route::get('/schedule', 'index')->middleware('auth');
    Route::post('/addSched', 'addSched')->middleware('auth');
    Route::get('/editSched/{id}', 'edit')->middleware('auth');
    Route::put('/editSched/{id}', 'update')->middleware('auth');
    Route::delete('/delete/sched/{id}', 'destroy')->middleware('auth');
});

Route::controller(leaveController::class)->group(function(){
    Route::get('/leave', 'index')->middleware('auth');
    Route::post('/addLeave', 'addLeave')->middleware('auth');
    Route::put('/editLeave/{id}', 'updateme')->middleware('auth');
    Route::delete('/deleteLeave/{id}', 'destroy')->middleware('auth');
});

Route::controller(mobileController::class)->group(function(){
    Route::delete('/deleteChecker/{id}', 'destroy')->middleware('auth');
});