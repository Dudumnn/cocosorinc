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

    public $subscriptions=[
        ['range'=>'500 - 1000','Value'=> $this->first[0]],
        ['range'=>'1001 - 1499','Value'=> $this->first[1]],
    ];

    public function render()
    {
        return view('livewire.chart');
    }
}
