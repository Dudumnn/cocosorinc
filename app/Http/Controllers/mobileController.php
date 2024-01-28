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

    public function update(Request $request, User $worker,$id){
        $data = User::findorfail($id);
        $validated = $request->validate([
            'name' => 'required',
            "username" => 'required',
            "password" => 'required'
        ]);
        $data = User::where('id', $id)->update([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
        ]);
        return back()->with('message', 'Successfully Updated!');
    }
    public function addUser(Request $request){
        $validated = $request->validate([
            "name" => 'required|string',
            "username" => ['required', 'unique:users'],
            "password" => 'required|string'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
        ]);

        if ($user) {
            return redirect('/staff')->with('message', 'Successfully Added!');
        }else {
            return back()->with('message', 'Failed!');
        }
        
    }
}
