<?php

namespace App\Http\Controllers;

use App\Models\Sched;
use Illuminate\Http\Request;

class SchedController extends Controller
{
    public function index(){
        $date = [];
        
        return view('perf.schedule');
    }
    public function edit($id){
        $data = Sched::findorfail($id);
        return view('perf.editSched', ['sched' => $data])->with('title', 'Edit Schedule');
    }

    public function addSched(Request $request){
        $validated = $request->validate([
            'shift' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        Sched::create($validated);

        return redirect('/schedule')->with('message', 'Schedule Successfully Added!');
    }
    public function update(Request $request, Sched $sched,$id){
        $data = Sched::findorfail($id);

        $validated = $request->validate([
            'shift' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $data->update($validated);

        return back()->with('message', 'Schedule Successfully Updated!');
    }
    public function destroy(Request $request, Sched $sched,$id){
        $data = Sched::findorfail($id);
        $data->delete();
        return back()->with('message', 'Successfully Deleted!');
    }
}
