@extends('layouts.app')


@section('content')
 
@foreach ($charactersList as $item)
    
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $item['character_name'] }}</h5>
      <p class="card-text">{{ $item['character_description'] }}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Type: {{ $item['speciality'] }}</li>
      <li class="list-group-item">Magie: {{ $item['mag'] }}</li>
      <li class="list-group-item">Force: {{ $item['for'] }}</li>
      <li class="list-group-item">Agilité: {{ $item['int'] }}</li>
      <li class="list-group-item">Intelligence: {{ $item['int'] }}</li>
      <li class="list-group-item">PV: {{ $item['pv'] }}</li>
    </ul>

    <a href="http://127.0.0.1:8000/characters/{{ $item['id'] }}/edit" class="btn btn-primary">Modifier Personnage</a>

    
</div>

@endforeach

@endsection
