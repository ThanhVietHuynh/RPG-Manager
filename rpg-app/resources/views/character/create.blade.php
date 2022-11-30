@extends('layouts.app')


@section('content')

    <h1>Ajouter un personnage</h1>


    <form action="{{route('characters.store')}}" method="POST">
        @csrf

        <div>
            <label for="character_name">Nom du personnage :</label>
            <input type="text" id="character_name" 
            placeholder="Entrez un nom" name="character_name"/>
        </div>

        <div>

            <label for="character_description">Description du personnage:</label>
            <input type="text" id="character_description" 
            placeholder="Entrez une description" name="character_description"/>

        </div>

        <div>
            <label for="speciality">Type:</label>
            <select name="speciality" id="speciality">
                <option value="Guerrier">Guerrier</option>
                <option value="Mage">Mage</option>
                <option value="Druide">Druide</option>
                <option value="Assassin">Assassin</option>
                <option value="Berseker">Berseker</option>
                <option value="Archer">Archer</option>
            </select>
        </div>

        <button onclick="myFunction()">Changer de statistique</button>

        <button type="submit">Créer mon personnage</button>

    </form>

@endsection