<?php

namespace App\Livewire;

use Livewire\Component;

class BellQuestion extends Component
{
    public $qNum = 0;
    public function increment()
    {
        $this->qNum++;
    }
    public function render()
    {
        return view('livewire.bell-question');
    }
}
