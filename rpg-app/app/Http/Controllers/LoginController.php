<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'pseudo'    => 'required|unique:users',
            'email'     => 'required|email|unique:users',
            'password'  => ['required','regex:^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[\W])(?=\S*[\d])\S*$']
        ]);

        $data = $request->all();

        User::create([
            'firstname'  =>  $data['firstname'],
            'lastname'   =>  $data['lastname'],
            'pseudo'     =>  $data['pseudo'],
            'email'      =>  $data['email'],
            'password'   => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Inscription réussie, vous pouvez vous connectez');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Le mot de passe ou l\'email n\'est pas valide');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}

