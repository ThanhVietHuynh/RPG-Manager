@extends('layouts.app')


@section('content')

    <h1>Formulaire de connexion</h1>

    <form action="{{ url('character') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="character_name">Nom du personnage :</label>
            <input type="text" class="form-control" id="character_name" 
            placeholder="Entrez un nom" name="character_name"/>
        </div>

        <div class="form-group mb-3">

            <label for="character_description">Description du personnage:</label>
            <input type="text" class="form-control" id="character_description" 
            placeholder="Entrez une description" name="character_description"/>

        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection