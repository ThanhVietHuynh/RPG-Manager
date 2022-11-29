<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $magie = mt_rand(0, 14);
        $force = mt_rand(0, 14);
        $agilite = mt_rand(0, 14);
        $intelligence = mt_rand(0, 14);
        $pv = mt_rand(20, 50);
     return view('characters.create',['mag'=>$magie,'for'=>$force,'agi'=>$agilite,'int'=>$intelligence,'pv'=>$pv]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'character_name'=>['required'],
            'character_description'=>'required',
            'speciality'=>'required',
            'mag'=>'required|numeric',
            'for'=>'required|numeric',
            'agi'=>'required|numeric',
            'int'=>'required|numeric',
            'pv'=>'required|numeric',
        ]);
        

        $character = new Character([
            'character_name' => $request->get('character_name'),
            'character_description' => $request->get('character_description'),
            'speciality' => $request->get('speciality'),
   
        ]);

            $character->save();
            return redirect('characters.store')->with('success', 'Personnage ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::findOrFail($id);
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = character::findOrFail($id);

        return view('character.edit', compact('character'));
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

            'character_name'=>'required',
            'character_description'=> 'required',
            'speciality' => 'required',

        ]);

        $character = Character::findOrFail($id);
        $character->charactereName = $request->get('character_name');
        $character->charactereDescription = $request->get('character_description');
        $character->speciality = $request->get('speciality');

        $character->update();

        return redirect('characters.update')->with('success', 'Le personnage a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $character = Character::findOrFail($id);
        $character->delete();
        return redirect('characters.destroy')->with('success', 'Personnage supprimé avec succès');
    }
}
