<?php

namespace App\Livewire;

use App\Models\Score;
use \App\Models\Question;
use Livewire\Attributes\On;
use Livewire\Component;

class MainPage extends Component
{
    public $index=1;
    public $flipped = true;
    public $receivedValue=0;

    public function increment()
    {
        $this->index++;
    }

    public function flip()
    {
        $this->flipped = !$this->flipped;
    }
    public function render()
    {
        $question = Question::with('answers')->findOrFail($this->index);
        $score = Score::findorFail(1);
        return view('livewire.main-page',
            compact('question', 'score'));
    }
}
