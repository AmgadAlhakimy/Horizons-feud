<?php

namespace App\Livewire;

use Livewire\Component;

class Score extends Component
{


    public function render()
    {
        $score = \App\Models\Score::findOrFail(1);
        return view('livewire.score', compact('score'));
    }
}
