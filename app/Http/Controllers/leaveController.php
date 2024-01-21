<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Worker;

class leaveController extends Controller
{
    public function index(){
        $data = Worker::where('employment_status', 'Active')->get();
        return view('leaves.index', ['employee' => $data]);
    }

    public function addLeave(Request $request){
        $data = Worker::findorfail($request->emp_id);
        $name = $data->name;
        $validated = $request->validate([
            'emp_id' => 'required',
            'leave_date' => 'required',
            'description' => 'required',
        ]);
        $validated['full_name'] = $name;
        
        Leave::create($validated);

        return redirect('/leave')->with('message', 'Leave Successfully Added!');
    }
    public function updateme(Request $request, Leave $sched,$id){
        $data = Leave::findorfail($id);
        $employee = Worker::findorfail($request->emp_id);
        $name = $employee->name;
        $validated = $request->validate([
            'emp_id' => 'required',
            'leave_date' => 'required',
            'description' => 'required',
        ]);
        $validated['full_name'] = $name;

        $data->update($validated);

        return back()->with('message', 'Leave Successfully Updated!');
    }
    public function destroy(Request $request, Leave $sched,$id){
        $data = Leave::findorfail($id);
        $data->delete();
        return back()->with('message', 'Successfully Deleted!');
    }
}
