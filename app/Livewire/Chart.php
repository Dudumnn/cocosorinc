<?php

namespace App\Livewire;

use Livewire\Component;

class Chart extends Component
{
    public $chart;
    public $chartVar;
    public function render()
    {
        return view('livewire.chart',[
            'chart' => $this->chart,
            'chartVar' => $this->chartVar
        ]);
    }
}
