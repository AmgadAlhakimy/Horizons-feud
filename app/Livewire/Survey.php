<?php

namespace App\Livewire;

use Livewire\Component;

class Survey extends Component
{

    public $indexes = [0, 0, 0, 0, 0, 0, 0, 0];
    public $result = [0, 0, 0, 0, 0, 0, 0, 0];
    public $pubValue = ['', '', '', '', '', '', '', ''];
    public $sum1 = 0;
    public $sum2 = 0;
    public $answer1 = '';
    public $answer2 = '';
    public $answer3 = '';
    public $answer4 = '';
    public $answer5 = '';
    public $answer6 = '';
    public $answer7 = '';
    public $answer8 = '';


    public function updatedAnswer1($value)
    {
        $this->indexes[0] = 1; // Change to 1 when typing in answer1
        $this->pubValue[0] = ltrim($value);
    }

    public function updatedAnswer2($value)
    {
        $this->indexes[1] = 1; // Change to 1 when typing in answer1
        $this->pubValue[1] = ltrim($value);
    }

    public function updatedAnswer3($value)
    {
        $this->indexes[2] = 1; // Change to 1 when typing in answer1
        $this->pubValue[2] = ltrim($value);
    }

    public function updatedAnswer4($value)
    {
        $this->indexes[3] = 1; // Change to 1 when typing in answer1
        $this->pubValue[3] = ltrim($value);
    }

    public function updatedAnswer5($value)
    {
        $this->indexes[4] = 1; // Change to 1 when typing in answer1
        $this->pubValue[4] = ltrim($value);
    }

    public function updatedAnswer6($value)
    {
        $this->indexes[5] = 1; // Change to 1 when typing in answer1
        $this->pubValue[5] = ltrim($value);
    }

    public function updatedAnswer7($value)
    {
        $this->indexes[6] = 1; // Change to 1 when typing in answer1
        $this->pubValue[6] = ltrim($value);
    }

    public function updatedAnswer8($value)
    {
        $this->indexes[7] = 1; // Change to 1 when typing in answer1
        $this->pubValue[7] = ltrim($value);
    }

    public function updateScore()
    {
        $score = \App\Models\Score::findorFail(1);
        $score->team1 += $this->sum1;
        $score->team2 += $this->sum2;
        $score->current = 0;
        $score->update();
    }

    public function render()
    {
        $this->toSearch();
        return view('livewire.survey');
    }

    public function toSearch()
    {
        $this->sum1 = 0;
        $this->sum2 = 0;
        for ($i = 0; $i <= 7; $i++) {
            if (strlen($this->pubValue[$i]) >= 1) {
                $this->result[$i] = \App\Models\Answer::where('name', 'like', "%{$this->pubValue[$i]}%")
                    ->pluck('value')->first();
                if ($this->result[$i] == null) {
                    $this->result[$i] = \App\Models\Answer::where('name', 'like', "%wrong%")
                        ->pluck('value')->first();
                }
            }
            if ($i < 4) {
                $this->sum1 += $this->result[$i];
            } else {
                $this->sum2 += $this->result[$i];
            }

        }
    }
}
