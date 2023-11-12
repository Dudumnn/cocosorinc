<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PerfController extends Controller
{
    public function performance(){
        return view('perf.index')->with('title', 'Performance');
    }

    public function report(){
        return view('perf.fullReport')->with('title', 'Full Report');
    }
}
