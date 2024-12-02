<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffControler;
use App\Http\Controllers\TaskControler;
use App\Http\Controllers\CustomAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/staff',[StaffControler :: class ,'index'])->name('staff.index');
Route::get('/staff/create',[StaffControler :: class ,'create'])->name('staff.create');
Route::post('/staff', [StaffControler::class, 'store'])->name('staff.store');
Route::get('/staff/{staff}/edit', [StaffControler::class, 'edit'])->name('staff.edit');
Route::put('/staff/{staff}/update', [StaffControler::class, 'update'])->name('staff.update');
Route::delete('/staff/{staff}/destroy', [StaffControler::class, 'destroy'])->name('staff.destroy');

Route::get('/task',[TaskControler :: class ,'index'])->name('task.index');
Route::get('/task/create',[TaskControler :: class ,'create'])->name('task.create');
Route::post('/task', [TaskControler::class, 'store'])->name('task.store');
Route::get('/task/{task}/edit', [TaskControler::class, 'edit'])->name('task.edit');
Route::put('/task/{task}/update', [TaskControler::class, 'update'])->name('task.update');
Route::delete('/task/{task}/destroy', [TaskControler::class, 'destroy'])->name('task.destroy');

Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/register', [CustomAuthController::class, 'registration']);


