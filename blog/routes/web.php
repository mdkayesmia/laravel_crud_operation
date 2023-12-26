<?php

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
Route::get('/show',[App\Http\Controllers\studentController::class,'show'])->name('show.data');
Route::get('',[App\Http\Controllers\studentController::class,'insert'])->name('insert.data');
Route::get('/delete/{id}',[App\Http\Controllers\studentController::class,'delete'])->name('delete.data');
Route::get('/update/{id}',[App\Http\Controllers\studentController::class,'update'])->name('update.data');
Route::post('/success',[App\Http\Controllers\studentController::class,'success'])->name('success.data');
Route::post('/updatedata/{id}',[App\Http\Controllers\studentController::class,'updatedata'])->name('updatedata.data');
