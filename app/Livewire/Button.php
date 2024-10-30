<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $flipped = true;
public $answerName;
public $answerValue;
public $questionId;
    public function flip()
    {
        $this->flipped = !$this->flipped;
    }
    public function render()
    {
        return view('livewire.button');
    }
}
