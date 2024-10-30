<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $flipped = false;

    public function flip()
    {
        $this->flipped = !$this->flipped;
    }
    public function render()
    {
        return view('livewire.button');
    }
}
