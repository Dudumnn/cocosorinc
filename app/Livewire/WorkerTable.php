<?php

namespace App\Livewire;

use App\Models\Worker;
use Livewire\Component;
use Livewire\WithPagination;

class WorkerTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 5;
    public $position = '';
    public $status = '';
    public $shift = '';

    public $sortBy = 'created_at';
    public $sortDir = 'ASC';
    public $empId = '';
    public $deleteID;

    public function setSortBy($sortByField){
        if($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == "DESC") ? 'ASC' : 'DESC';
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'ASC';
    }

    public function render()
    {
        return view('livewire.worker-table', [
            'users' => Worker::search($this->search)
            ->when($this->position !== '',function($query){
                $query->where('position',$this->position);
            })
            ->when($this->status !== '',function($query){
                $query->where('status',$this->status);
            })
            ->when($this->shift !== '',function($query){
                $query->where('shift',$this->shift);
            })
            ->orderBy($this->sortBy,$this->sortDir)
            ->paginate($this->perPage),
        ]);
    }

    /**public function resetFilters()
    {
        $this->search = '';
        $this->position = '';
        $this->status = '';
        $this->shift = '';
    }*/

    /**public function setId($id) {
        $this->empId = $id;
    }*/
    
    public function deleteEmp($id) {
        /**$employee = Worker::where('id', $this->empId)->first();
        $employee->delete();*/
        $employee = Worker::find($id);
        if ($employee) {
            $employee->delete();
        }
    }
}
