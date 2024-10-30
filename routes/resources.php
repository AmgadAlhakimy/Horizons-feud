<?php

use App\Http\Controllers\answer;
use App\Http\Controllers\question;
use Illuminate\Support\Facades\Route;
Route::resource('questions',Question::class);
Route::resource('answers',Answer::class);
