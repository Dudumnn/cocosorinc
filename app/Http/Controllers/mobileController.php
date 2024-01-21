<?php

namespace App\Http\Controllers;

use App\Models\User\User;
use Illuminate\Http\Request;

class mobileController extends Controller
{
    public function destroy(Request $request, User $worker,$id){
        $data = User::findorfail($id);
        $data->delete();
        return back()->with('message', 'Successfully Deleted!');
    }
}
