@extends('layouts.app')


@section('content')
 
@foreach ($character as $item)
<div class="cardlist">
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
      
      <a href="{{ route('characters.edit', $item['id']) }}" class="btn btn-primary">Modifier Personnage</a>
      <br>
      <a href="{{ route('characters.destroy',$item['id']) }}" class="btn btn-danger">Supprimer Personnage</a>
  
  </div>

</div>

@endforeach

@endsection


