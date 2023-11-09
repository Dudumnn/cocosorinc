<?php

namespace App\Http\Controllers;

use App\Models\EmpUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class EmpController extends Controller
{
    public function login(){
        if(\View::exists('user.login')){
            return view('user.login');
        }else{
            //return abort(404);
            return response()->view('errors.404');
        }
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
            "username" => ['required', 'min:4'],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = EmpUsers::create($validated);

        auth()->login($user);
    }

    public function process(Request $request){
    }

    public function index(){
        //$data = User::where('id', '>', 0)->orderBy('name', 'desc')->get();
        //return view('user.index', ['users' => $data]);

        return view('user.index');
    }
}
