<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffControler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/staff',[StaffControler :: class ,'index'])->name('staff.index');
Route::get('/staff/create',[StaffControler :: class ,'create'])->name('staff.create');
Route::post('/staff', [StaffControler::class, 'store'])->name('staff.store');