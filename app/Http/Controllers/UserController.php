<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        }else{
            //return abort(404);
            return response()->view('errors.404');
        }
    }

    public function process(Request $request){
        $validated = $request->validate([
            "username" => ['required', 'min:4'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/dashboard')->with('message', 'Welcome Back User!');
        }

        return back()->withErrors(['username' => 'Login failed'])->onlyInput('username');
    }

    public function register(){
        if(View::exists('user.register')){
            return view('user.register');
        }else{
            //return abort(404);
            return response()->view('errors.404');
        }
    }
    
    public function store(Request $request){
        $validated = $request->validate([
            "username" => ['required', 'min:4', 'unique:users'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        auth()->login($user);

        return redirect('/dashboard')->with('message', 'Welcome User!');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Successful');
    }

    public function index(){
        $user = Auth::user()->count();
        $worker = Worker::all();
        return view('user.index', [
            'user' => $user,
            'workers' => $worker
        ]);
    }
    public function staff(){
        return view('staff.index');
    }
    public function destroy(Request $request, User $worker,$id){
        $data = User::findorfail($id);
        $data->delete();
        return back()->with('message', 'Successfully Deleted!');
    }
} 
