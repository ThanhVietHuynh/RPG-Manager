@extends('layouts.app')


@section('content')

    <h1>Ajouter un personnage</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

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

        <div class="form-group mb-3">
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

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection