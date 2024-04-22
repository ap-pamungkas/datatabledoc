<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyTestController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('list', [MyTestController::class, 'dataTableLogic']);
