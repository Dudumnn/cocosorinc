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
        $data = Worker::paginate(6);
        return view('worker.index', ['users' => $data])->with('title', 'Master List');
    }
}
