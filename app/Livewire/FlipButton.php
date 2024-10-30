<?php

namespace App\Livewire;

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
    }

    public function render()
    {
        return view('livewire.flip-button');
    }
}
