<?php

namespace App\Livewire;

use App\Models\Score;
use Livewire\Component;

class Award1 extends Component
{
    public function award1(): void
    {
        $score = Score::findorFail(1);
        $score->team1 +=  $score->current;
        $score->current=0;
        $score->update();
    }
    public function render()
    {
        $score = Score::findOrFail(1);
        return view('livewire.award1',compact('score'));
    }
}
