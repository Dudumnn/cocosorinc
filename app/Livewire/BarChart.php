<?php

namespace App\Livewire;

use Livewire\Component;

class BarChart extends Component
{
    public $bar;
    public $barVar;
    public function render()
    {
        return view('livewire.bar-chart');
    }
}
