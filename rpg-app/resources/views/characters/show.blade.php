@extends('layouts.app')


@section('content')
 
@foreach ($characterUser as $item)
<div class="cardlist" style="margin: 3em;">
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
      <form action="{{ route('characters.destroy',$item['id']) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Supprimer Personnage</button>
      </form>
  
  </div>

</div>

@endforeach

@endsection


