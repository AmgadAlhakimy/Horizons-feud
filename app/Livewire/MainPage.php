<?php

namespace App\Livewire;

use App\Models\Score;
use \App\Models\Question;
use Livewire\Component;

class MainPage extends Component
{
    public $qNum = 1;
    public $index = 1;


    public function increment(): void
    {
        $this->qNum++;
    }

    public function render()
    {
        $score = Score::findOrFail(1);
        $question = Question::with('answers')->findOrFail($this->qNum);
        return view('livewire.main-page'
            , compact('question','score'));
    }
}
