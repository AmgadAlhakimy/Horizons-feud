<?php

namespace App\Livewire;

use App\Models\Score;
use Livewire\Component;

class Award2 extends Component
{
    public function award2(): void
    {
        $score = Score::findorFail(1);
        $score->team2 +=  $score->current;
        $score->current=0;
        $score->update();
    }
    public function render()
    {
        $score = Score::findOrFail(1);
        return view('livewire.award2',compact('score'));
    }
}
