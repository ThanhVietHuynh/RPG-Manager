<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'character_name'=>'required|string',
            'character_description'=>'required|string',
            'speciality'=>'required|string',
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
            'mag' => $request->get('mag'),
            'for' => $request->get('for'),
            'agi' => $request->get('agi'),
            'int' => $request->get('int'),
            'pv' => $request->get('pv'),
            'user_id'=>Auth::user()->id,
        ]);

            $character->save();
            return redirect('characters/show')->with('success', 'Personnage ajout?? avec succ??s');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($characterUser)
    {
        $characterUser = Character::where('user_id',Auth::user()->id)->get();
        return view('characters.show', ['characterUser' => $characterUser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Character::findOrFail($id);

        return view('characters.edit', ['character'=>$character]);
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

            'character_name'=>'required|string',
            'character_description'=>'required|string',
            'speciality'=>'required|string',
        ]);

        $character = Character::findOrFail($id);
        $character->character_name = $request->get('character_name');
        $character->character_description = $request->get('character_description');
        $character->speciality = $request->get('speciality');
        
        $character->save();

        return redirect('characters/show')->with('success', 'Personnage modifier avec succ??s');
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

        return redirect('characters/show')->with('success', 'Personnage supprim?? avec succ??s');
    }

    public function filtre()
    {
        $characters = Character::all();
        $filtered = $characters->where('speciality','Mage');

        $filtered->all();

    }
}
