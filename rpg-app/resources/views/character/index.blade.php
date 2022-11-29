@extends('layouts.app')

@section('content')

    

    <div class="col-lg-1">
        <a class="btn-success" href="{{ url('character/create') }}">Ajouter</a>
    </div>


 

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

 

    <table class="table table-bordered">

        <tr>

            <th>Nom du personnage</th>
            <th>Descriptif</th>
            <th>Type</th>
        

        </tr>

        @foreach ($characters as $index => personnage)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ character->characterName }}</td>
                <td>{{ character->characterDescription }}</td>
                <td>{{ character->speciality }}</td>
                <td>

                    <form action="{{ url('character/'. $character->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('character/'. $character->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('character/'. $character->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

        @endforeach
    </table>

@endsection