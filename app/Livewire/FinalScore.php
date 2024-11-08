<?php

namespace App\Livewire;

use Livewire\Component;

class FinalScore extends Component
{
    public function render()
    {
        $score = \App\Models\Score::findOrFail(1);
        return view('livewire.final-score',compact('score'));
    }
}
