<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffControler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/staff',[StaffControler :: class ,'index'])->name('staff.index');
Route::get('/staff/create',[StaffControler :: class ,'create'])->name('staff.create');
Route::post('/staff', [StaffControler::class, 'store'])->name('staff.store');
Route::get('/staff/{staff}/edit', [StaffControler::class, 'edit'])->name('staff.edit');
Route::put('/staff/{staff}/update', [StaffControler::class, 'update'])->name('staff.update');
Route::delete('/staff/{staff}/destroy', [StaffControler::class, 'destroy'])->name('staff.destroy');

