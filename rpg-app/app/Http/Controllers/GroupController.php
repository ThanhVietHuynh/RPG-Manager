<?php

namespace App\Http\Controllers;
use App\Models\Group;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Group::all();
        return view('groups.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perso= Character::where('user_id',Auth::user()->id)->get();
        return view('groups.create',['perso'=>$perso]);
        // return view('groups.create');
       
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
            'group_name'=>['required'],
            'group_description'=>'required',
            'number_place'=>'required',
            'character_name'=>'required',
        ]);
        

        $group = new Group([
            'group_name' => $request->get('group_name'),
            'group_description' => $request->get('group_description'),
            'number_place' => $request->get('number_place'),
            'character_name' => $request->get('character_name'),
            'author_id'=>Auth::user()->id,
        ]);

            $group->save();
            return redirect('groups/show')->with('success', 'Le groupe a été créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($groups)
    {
        $groups= Group::where('author_id',Auth::user()->id)->get();
        $persos= Character::all();
        return view('groups.show', ['groups'=>$groups],['persos'=>$persos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groups = Group::findOrFail($id);
        $groups = Character::where('user_id',Auth::user()->id)->get();

        return view('groups.edit', ['groups'=>$groups]);
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
            'group_name'=>'required|string',
            'group_description'=>'required|string',
            'number_place' => 'required|numeric',
            'group_id'=>'required',
        ]);

        $groups = Group::findOrFail($id);
        $groups->group_name = $request->get(('group_name'));
        $groups->group_description = $request->get('group_description');
        $groups->number_place = $request->get('number_place');
        $groups->group_id = $request->Character::where('user_id',Auth::user()->id)->get();

        $groups->save();

        return redirect('groups/show',['groups' => $groups])->with('success', 'Le groupe a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groups = Group::findOrFail($id);
        $groups->delete();
        return redirect('groups/show')->with('success', 'Le groupe a bien été supprimer');
    }
}
