<?php

namespace App\Livewire;

use App\Models\Leave;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Sched;

class WeeklyCal extends Component
{
    use WithPagination;

    public $sched;

    public function mount($sched){
        $this->sched = $sched;
    }

    public $shift = '';

    public $search = '';

    public $perPage = 5;
    public function render()
    {
        return view('livewire.weekly-cal',
        [
            /**'scheds' => DB::table('schedules')
            ->join('workers', 'schedules.shift','=','workers.shift')
            ->select('workers.*','schedules.time_in','schedules.time_out','schedules.start_date','schedules.end_date',)
            ->where('schedules.id',  $this->sched)
            ->when($this->search !== '',function($query){
                $query->where('workers.name', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage),*/

            'date' => Sched::findorfail($this->sched),
            //getting the workers for this shift
            'emps' => DB::table('schedules')
            ->join('workers', 'schedules.shift','=','workers.shift')
            ->select('workers.*')
            ->where('schedules.id',  $this->sched)
            ->when($this->search !== '',function($query){
                $query->where('workers.name', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'asc')
            ->get(),
            //getting the workers output throughout the whole shift
            'outputs' => DB::table('schedules')
            ->join('output', function ($join) {
                $join->on('output.date', '>=', 'schedules.start_date')
                     ->where('output.date', '<=', 'schedules.end_date');
            })
            ->orWhere('schedules.id',  $this->sched)
            ->get(),
            'leaves' => Leave::all()
        ]
        );
    }
}
