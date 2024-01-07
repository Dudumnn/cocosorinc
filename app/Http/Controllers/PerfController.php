<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Performance;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OutputImport;
use View;

class PerfController extends Controller
{
    public function performance(){
        return view('perf.index')->with('title', 'Performance');
    }

    public function report(){
        return view('perf.fullReport')->with('title', 'Full Report');
    }

    public function weekly(){
        return view('perf.visualiserMain')->with('title', 'Performance Track');
    }

    public function import(Request $request){
        Excel::import(new OutputImport, $request->file('file'));

        return redirect('/fullReport');
    }

    public function destroy(Request $request, Performance $sched,$id){
        $data = Performance::findorfail($id);
        $data->delete();
        return back()->with('message', 'Successfully Deleted!');
    }
}
