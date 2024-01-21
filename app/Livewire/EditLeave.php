<?php

namespace App\Livewire;

use App\Models\Worker;
use Livewire\Component;

class EditLeave extends Component
{
    public function render()
    {
        return view('livewire.edit-leave', [
            'emps' => Worker::all()
        ]);
    }
}
