<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SurveySiderbar extends Component
{
    #[Reactive]
    public $sidebar;

    public function render(): View
    {
        return view('livewire.survey-siderbar');
    }
}
