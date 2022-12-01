<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
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
            'password'  => ['required',Password::min(8)->letters(),Password::min(8)->numbers(),Password::min(8)->symbols()],
        ]);

        $data = $request->all();

        User::create([
            'firstname'  =>  $data['firstname'],
            'lastname'   =>  $data['lastname'],
            'pseudo'     =>  $data['pseudo'],
            'email'      =>  $data['email'],
            'password'   =>  Hash::make($data['password'])
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
            return redirect('login')->with('success', 'Vous êtes connecté');
        }

        return redirect('login')->with('success', 'Le mot de passe ou l\'email n\'est pas valide');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return redirect('registration')->with('success', 'Inscription réussie');
        }

        return redirect('login')->with('success', 'Votre Inscription a échoué');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}

