<?php

namespace App\Livewire;

use Livewire\Component;

class Chart extends Component
{
    public $first;
    public $second;
    public function mount($first , $second){
        $this->first = $first;
        $this->second = $second;
    }

    public function render()
    {
        return view('livewire.chart', [
            'range' => [
                'one' => '500 - 1000',
                'two' => '1001 - 1499'
            ],
            'values' => $this->first,
        ]);
    }
}
