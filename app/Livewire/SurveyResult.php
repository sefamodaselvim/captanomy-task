<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SurveyResult extends Component
{
    #[Reactive]
    public $score;

    public function render(): View
    {
        return view('livewire.survey-result');
    }
}
