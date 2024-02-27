<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('employees', [EmployeeController::class, 'index']);
Route::post('employee', [EmployeeController::class, 'store']);
Route::get('employee/{id}', [EmployeeController::class, 'show']);
Route::put('employee/{id}', [EmployeeController::class, 'update']);
Route::delete('employee/{id}', [EmployeeController::class, 'destroy']);
