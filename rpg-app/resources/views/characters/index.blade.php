@extends('layouts.app')

@section('title','Personnage')

@section('content')
<ul class="nav justify-content-center" style="margin: 1em">
  <li class="nav-item">
    <a class="nav-link" href="#">Tous les personnages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Guerrier</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Mage</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Druide</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Assassin</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Berserker</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Archer</a>
  </li>
  <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</ul>

<div class="row" style="margin-left: 12em">
  @foreach ($characters as $item)
  <div class="col-sm-3" style="margin: 1em">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $item->character_name }}</h5>
        <h5 class="card-title">du joueur {{ $item->user->pseudo }}</h5>
        <p class="card-text">{{ $item->character_description }}</p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{ $item['speciality'] }}</li>
          <li class="list-group-item">Magie: {{ $item['mag'] }}</li>
          <li class="list-group-item">Force: {{ $item['for'] }}</li>
          <li class="list-group-item">Agilité: {{ $item['int'] }}</li>
          <li class="list-group-item">Intelligence: {{ $item['int'] }}</li>
          <li class="list-group-item">PV: {{ $item['pv'] }}</li>
        </ul>
      </div>
    </div>
  </div>
@endforeach

@endsection