<?php

use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SpecialityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/schedules',[ScheduleController::class,'index']);
Route::get('/schedules/active/{schedule}',[ScheduleController::class,'change']);


Route::get('/specialities',[SpecialityController::class,'index']);
Route::delete('/specialities/{speciality}',[SpecialityController::class,'destroy']);
Route::post('/specialities',[SpecialityController::class,'store']);


