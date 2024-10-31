<?php

namespace App\Livewire;

use App\Models\Score;
use Livewire\Component;

class FlipButton extends Component
{
    public $flipped = false;
    public $answerName;
    public $answerValue;
    public $questionId;

    public function flip()
    {
        $this->flipped = !$this->flipped;
      $this->storeScore();
    }
    public function storeScore()
    {
        $score = Score::findorFail(1);
        $current = $score->current;
        $score->current += $this->answerValue;
        $score->update();
    }

    public function render()
    {
        return view('livewire.flip-button');
    }
}
