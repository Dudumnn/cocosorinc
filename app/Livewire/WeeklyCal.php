<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class WeeklyCal extends Component
{
    use WithPagination;

    public $shift = '';

    public $search = '';

    public $perPage = 5;
    public function render()
    {
        return view('livewire.weekly-cal',
        [
            'scheds' => DB::table('workers')
            ->join('output', 'workers.name','=','output.name')
            ->select('output.*','workers.shift')
            ->when($this->shift !== '',function($query){
                $query->where('shift',$this->shift);
            })
            ->when($this->search !== '',function($query){
                $query->where('workers.name', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage)
        ]
        );
    }
}
