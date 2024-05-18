<?php

use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;


Route::get("/", [EmployeController::class,'index']);
Route::get("/edit/{id}", [EmployeController::class,'edit']);
Route::post('/update/{id}', [EmployeController::class,'update']);