<?php

use App\Livewire\Answer;
use App\Livewire\FinalScore;
use App\Livewire\FlipButton;
use App\Livewire\MainPage;
use App\Livewire\Question;
use App\Livewire\Survey;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
})->name('index-page');

Route::get('/question', Question::class);
Route::get('/answer', Answer::class);
Route::get('/flip-button', FlipButton::class);
Route::get('/main-page', MainPage::class)
    ->name('main-page');
Route::get('/survey', Survey::class)
    ->name('survey');
Route::get('/final', FinalScore::class)
    ->name('final');
include 'resources.php';

