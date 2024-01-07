<?php

namespace App\Livewire;

use Livewire\Component;

class Chart extends Component
{
    public $first;
    public $second;

    public function render()
    {
        return view('livewire.chart');
    }
}
