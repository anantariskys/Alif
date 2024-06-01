<?php

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class,'index']);

Route::resource('/work', ProductController::class)->names('work');
Route::resource('/skills', SkillController::class)->names('skills');
