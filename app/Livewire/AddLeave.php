<?php

namespace App\Livewire;

use App\Models\Worker;
use Livewire\Component;

class AddLeave extends Component
{
    public function render()
    {
        return view('livewire.add-leave', [
            'emps' => Worker::all()
        ]);
    }
}
