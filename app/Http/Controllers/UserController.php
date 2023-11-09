<?php

namespace App\Http\Controllers;

use App\Models\User;
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

            return redirect('/')->with('message', 'Welcome Back!');
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

        return redirect('/')->with('message', 'Welcome User!');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Successful');
    }

    public function index(){
        //$data = User::where('id', '>', 0)->orderBy('name', 'desc')->get();
        //return view('user.index', ['users' => $data]);

        return view('user.index');
    }
} 
