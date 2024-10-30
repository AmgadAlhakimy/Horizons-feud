<?php

use App\Livewire\Answer;
use App\Livewire\Question;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/question', Question::class);
Route::get('/answer', Answer::class);
include 'resources.php';

