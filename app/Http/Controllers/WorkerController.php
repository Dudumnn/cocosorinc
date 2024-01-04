<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use View;
use Illuminate\Validation\Rule;

class WorkerController extends Controller
{
    public function editWorker(){
        return view('worker.editWorker')->with('title', 'Edit Worker');
    }

    public function employees(){
        return view('worker.index')->with('title', 'Master List');
    }

    public function profile($id){
        $data = Worker::findorfail($id);
        return view('worker.profile', ['employee' => $data])->with('title', 'Worker Profile');
    }

    public function add(){
        return view('worker.addWorker')->with('title', 'Add');
    }

    public function addEmployee(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'middle_name' => 'required',
            'extension_name' => 'required',
            'birthdate' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'status' => 'required',
            'position' => 'required',
            'date_of_employment' => 'required',
            'shift' => 'required',
            'employment_status' => 'required',
        ]);
        
        Worker::create($validated);

        return redirect('/employees')->with('message', 'Successfully Added!');
    }
    public function update(Request $request, Worker $worker,$id){
        $data = Worker::findorfail($id);

        $validated = $request->validate([
            'name' => 'required',
            'middle_name' => 'required',
            'extension_name' => 'required',
            'birthdate' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'position' => 'required',
            'status' => 'required',
            'shift' => 'required',
            'employment_status' => 'required',
        ]);

        $data->update($validated);

        //$worker->update($validated);

        return back()->with('message', 'Successfully Updated!');
    }
}
