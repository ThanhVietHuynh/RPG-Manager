@extends('layouts.app')

@section('img','background-character')

@section('content')

<div class="row" style="margin-left: 12em">
  @foreach ($characterUser as $item)
  <div class="col-sm-3" style="margin: 1em">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $item['character_name'] }}</h5>

        <p class="card-text">{{ $item['character_description'] }}</p>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{ $item['speciality'] }}</li>
          <li class="list-group-item">Magie: {{ $item['mag'] }}</li>
          <li class="list-group-item">Force: {{ $item['for'] }}</li>
          <li class="list-group-item">Agilité: {{ $item['int'] }}</li>
          <li class="list-group-item">Intelligence: {{ $item['int'] }}</li>
          <li class="list-group-item">PV: {{ $item['pv'] }}</li>
        </ul>

        <a href="{{ route('characters.edit', $item['id']) }}" class="btn btn-primary" style="width: 100%; margin-bottom:1em">Modifier Personnage</a>

        <form action="{{ route('characters.destroy',$item['id']) }}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger" style="width: 100%">Supprimer Personnage</button>
        </form>
      </div>
    </div>
  </div>
@endforeach

@endsection


