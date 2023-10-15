<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Taskcontroller;
use App\Http\Controllers\Controller;
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

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', [Controller::class, 'dashboard'])->name('dashboard');
Route::post('/mark-complete', [TaskController::class, 'markAsCompleted']);
Route::delete('/delete-completed-task/{completedTask}', [Taskcontroller::class,'delete'])->name('deleteCompletedTask');
Route::delete('/delete-task/{Task}', [Taskcontroller::class,'deleteTask'])->name('deleteTask');
Route::post('/store', [TaskController::class, 'store'])->name('store');


