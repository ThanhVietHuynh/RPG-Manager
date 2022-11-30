@extends('layouts.app')


@section('content')


    <h1>Modifier Personnage</h1>

    <form method="post" action="{{ url('characters/'. $character->id) }}" >
        @method('PATCH')
        @csrf


        <div>

            <label for="character_name">Nom du personnage:</label>
            <input type="text" class="form-control" id="character_name" 
            placeholder="Entrer Nom" name="character_name" value="{{ $character->character_name }}">

        </div>

        <div>

            <label for="character_description">Description:</label>
            <input type="text" id="character_description" 
            placeholder="Entrer une description" name="character_description"
             value="{{ $character->character_description }}">

        </div>

        <div>

            <label for="speciality">Type:</label>
            <select name="speciality" id="speciality">
                <option selected>{{$character->speciality}}</option>
                <option value="Guerrier">Guerrier</option>
                <option value="Mage">Mage</option>
                <option value="Druide">Druide</option>
                <option value="Assassin">Assassin</option>
                <option value="Berseker">Berseker</option>
                <option value="Archer">Archer</option>
            </select>

        </div>


        <button type="submit">Enregistrer</button>

    </form>

@endsection