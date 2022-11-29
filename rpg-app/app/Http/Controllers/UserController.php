<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate= $request->validate([
            'lastname'=>['required'],
            'firstname'=>'required',
            'pseudo'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        

        $user = new User([
            'lastname' => $request->get('lastname'),
            'firstname' => $request->get('firstname'),
            'pseudo' => $request->get('pseudo'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);

            $user->save();
            return redirect('/')->with('success', 'Votre compte a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'lastname'=>'required',
            'firstname'=> 'required',
            'pseudo' => $request->get('pseudo'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ]);

        $user = User::findOrFail($id);
        $user->lastname = $request->get('lastname');
        $user->firstname = $request->get('firstname');
        $user->pseudo = $request->get('pseudo');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        $user->update();

        return redirect('/')->with('success', 'Votre compte a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/')->with('success', 'Votre compte a été supprimé avec succès');
    }
}
