<?php

use App\Livewire\Answer;
use App\Livewire\Question;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
})->name('index-page');

Route::get('/question', Question::class);
Route::get('/answer', Answer::class);
Route::get('/flip-button', \App\Livewire\FlipButton::class);
Route::get('/main-page', \App\Livewire\MainPage::class)
    ->name('main-page');
include 'resources.php';

