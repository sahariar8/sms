<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/student/info', [HomeController::class,'info'])->name('student.info');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add/student',[DashboardController::class,'show'])->name('add.student');
    Route::post('/insert/student',[DashboardController::class,'insert'])->name('insert.student');
    Route::get('/all/students',[DashboardController::class,'store'])->name('all.students');
    Route::get('/destroy/{id}/students',[DashboardController::class,'destroy'])->name('student.destroy');
    Route::get('/edit/{id}/students',[DashboardController::class,'edit'])->name('student.edit');
    Route::post('/update/{id}/students',[DashboardController::class,'update'])->name('student.update');
    
});
