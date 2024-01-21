<?php

namespace App\Livewire;

use App\Models\User\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Staff extends Component
{
    public $value;

    public function render()
    {
        return view('livewire.staff',
        [
            'checkers' => User::all(),
            'hrUsers' => DB::table('users')->get()
        ]);
    }
}
