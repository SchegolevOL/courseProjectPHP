<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
        ]);
        $user = User::query()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        session()->flash('success', 'Registration completed');
        Auth::login($user);
        return redirect()->route('home');
    }
    public function loginForm()
    {

        return view('user.login');
    }
    public function login(Request $request)
    {

        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            session()->flash('success', 'You are successfully logged');


            if (Auth::user()->is_admin){
                return redirect()->route('admin.index');
            }
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Incorrect login or password');


    }

    public function logout()
    {

        Auth::logout();
        return redirect()->route('home');
    }
}
