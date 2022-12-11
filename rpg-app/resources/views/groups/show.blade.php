@extends('layouts.app')

@section('title','Groupes')

@section('content')

@foreach ($groups as $group)
    <div class="row" style="margin-left: 12em">
        <div class="col-sm-3" style="margin: 1em; width:50%">
        <div class="card">
            <div class="card-body">
          <h5 class="card-title">{{ $group['group_name'] }}</h5>
          <p class="card-text">Description du groupe: {{ $group['group_description'] }}</p>
          <p class="card-text">Nombre de place: {{ $group['number_place'] }}</p>
           
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom personnage</th>
                <th scope="col">Type</th>
                <th scope="col">Magie</th>
                <th scope="col">Force</th>
                <th scope="col">Agilité</th>
                <th scope="col">Intelligence</th>
                <th scope="col">PV</th>
              </tr>
            </thead>
            @foreach($persos as $perso)
            <tbody>
              <tr>
                <th scope="row">{{ $perso->character_name }}</th>
                <td>{{ $perso->speciality }}</td>
                <td>{{ $perso->mag }}</td>
                <td>{{ $perso->for }}</td>
                <td>{{ $perso->agi }}</td>
                <td>{{ $perso->int }}</td>
                <td>{{ $perso->pv }}</td>
              </tr>
            </tbody>
            @endforeach
          </table>

          <a href="{{ route('groups.edit', $group['id']) }}" class="btn btn-primary" style="width: 100%; margin-bottom:1em">Modifier Groupe</a>

          <form action="{{ route('groups.destroy',$group['id']) }}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger" style="width: 100%">Supprimer Groupe</button>
          </form> 
        </div>
      </div>
    </div>

@endforeach

@endsection
