<?php

namespace App\Livewire;

use Livewire\Component;

class Answer extends Component
{
    public function render()
    {
        $questions = \App\Models\Question::all();
        return view('livewire.answer',compact('questions'));
    }
}
