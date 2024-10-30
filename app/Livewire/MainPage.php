<?php

namespace App\Livewire;

use Livewire\Component;

class MainPage extends Component
{
    public $index=1;
    public $flipped = true;

    public function increment()
    {
        $this->index++;
    }

    public function flip()
    {
        $this->flipped = !$this->flipped;
    }
    public function render()
    {
        $question = \App\Models\Question::with('answers')->findOrFail($this->index);
        return view('livewire.main-page', compact('question'));
    }
}
