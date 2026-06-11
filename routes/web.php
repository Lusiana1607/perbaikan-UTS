<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class,'index']);

Route::get('/dashboard',[TaskController::class,'dashboard']);

Route::get('/task/create',[TaskController::class,'create']);
Route::post('/task/store',[TaskController::class,'store']);

Route::get('/task/{task}/edit',[TaskController::class,'edit']);
Route::put('/task/{task}',[TaskController::class,'update']);

Route::delete('/task/{task}',[TaskController::class,'destroy']);

Route::post('/task/{task}/selesai',
    [TaskController::class,'selesai']);

Route::get('/report',
    [TaskController::class,'report']);