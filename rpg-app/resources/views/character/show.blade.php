@extends('layouts.app')


@section('content')

    <table class="table table-bordered">

        <tr>
            <th>Nom du personnage:</th>
            <td>{{ $character->characterName }}</td>
        </tr>

        <tr>

            <th>Description:</th>
            <td>{{ $character->characterDescription }}</td>

        </tr>

        <tr>

            <th>Type</th>
            <td>{{ $character->speciality }}</td>

        </tr>

    </table>

@endsection