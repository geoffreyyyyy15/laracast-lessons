<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You Successfully Logged out!');
    } 

    public function create() {
        return view('sessions.create');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not validate'
            ]);
          
        }
        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back');
        // auth failed
        // return back()
        // ->withInput()
        // ->withErrors(['email' => 'Your provided credentials could not verified']);

       
    }
}
