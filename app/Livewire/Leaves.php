<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Leave;
use App\Models\Worker;

class Leaves extends Component
{
    public function render()
    {
        return view('livewire.leaves', [
            'leaves' => Leave::latest()->get(),
            'emps' => Worker::all()
        ]);
    }
}
