<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffControler;
use App\Http\Controllers\TaskControler;
use App\Http\Controllers\CustomAuthController;



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

Route::get('/', [CustomAuthController::class, 'login'])->name('login');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('/profile',[CustomAuthController :: class ,'index'])->name('profile.index');




