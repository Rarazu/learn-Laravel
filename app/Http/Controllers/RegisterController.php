<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        //return $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd($request->all());
        User::create($validatedData);
        // $request->flash('success', 'Registration Successfull! Please Login');
        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
