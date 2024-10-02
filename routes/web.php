<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imageController;

Route::get('/',[imageController::class, 'welcome']);
Route::get('/authors',[imageController::class,'authors']);
Route::get('/rnd',[imageController::class, 'rnd']);
Route::get('/catspage/{id}',[imageController::class, 'catspage']);
