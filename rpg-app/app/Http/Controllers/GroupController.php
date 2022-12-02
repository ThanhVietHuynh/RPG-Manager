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
        $groups = Group::all();
        return view('groups.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perso= Character::all();
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
    public function show()
    {
        $group= Group::where('author_id',Auth::user()->id)->get();
        // $perso= Character::all();
        // return view('groups.create', ['group'=>$group],['perso'=>$perso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::findOrFail($id);

        return view('groups.edit', ['group'=>$group]);
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
            'group_name'=>['required'],
            'group_description'=>'required',
            'character_name'=>'required',
        ]);

        $group = new Group([
            'group_name' => $request->get('group_name'),
            'group_description' => $request->get('group_description'),
            'character_name' => $request->get('character_name'),
        ]);

        $group->update();

        return redirect('groups.update',['group' => $group])->with('success', 'Le groupe a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect('groups.destroy',['group'=>$group])->with('success', 'Le groupe a été supprimé');
    }
}
