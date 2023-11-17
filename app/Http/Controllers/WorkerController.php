<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use View;

class WorkerController extends Controller
{
    public function editWorker(){
        return view('worker.editWorker')->with('title', 'Edit Worker');
    }

    public function employees(){
        return view('worker.index')->with('title', 'Master List');
    }
}
