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

        
        <div>
            <label for="mag">Magie :</label>
            <input type="number" readonly value={{$mag}} class="reandonly" name="mag"/>
        </div>
        <div>
            <label for="for">Force :</label>
            <input type="number"readonly value={{$for}} class="reandonly" id="for" name="for"/>
        </div>
        <div>
            <label for="agi">Agilité :</label>
            <input type="number" readonly value={{$agi}} class="reandonly" id="agi" name="agi"/>
        </div>
        <div>
            <label for="int">Intelligence :</label>
            <input type="number" readonly value={{$int}} class="reandonly" id="int" name="int"/>
        </div>
        <div>
            <label for="pv">PV :</label>
            <input type="number" readonly value={{$pv}} class="reandonly" id="pv" name="pv"/>
        </div>
        <button type="submit">Créer mon personnage</button>

    </form>

@endsection


<style>
    .reandonly{
        border: none
    }
</style>