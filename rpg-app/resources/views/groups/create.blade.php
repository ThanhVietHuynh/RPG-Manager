@extends('layouts.app')

@section('title','Création personnage')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
        <div class="card-header">Créer un groupe</div>
        <div class="card-body">
            <form action="{{route('groups.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="group_name" class="form-control" placeholder="Nom du groupe"/>
                    @if($errors->has('group_name'))
                        <span class="text-danger">{{ $errors->first('group_name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Ajouter une description" id="floatingTextarea" name="group_description"></textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <input type="number" name="number_place" min="2" class="form-control" placeholder="Nombre de place"/>
                    @if($errors->has('number_place'))
                        <span class="text-danger">{{ $errors->first('number_place') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="">Choisissez les personnages</label>
                    <div>
                        @foreach ($perso as $item)
                        <input type="checkbox" 
                        value="{{ $item['character_name'] }}" name="character_name" id="">
                        <label name="character_name" for="">{{ $item['character_name'] }}</label>
                        @endforeach
                    </div>
                </div>
                    <button type="submit" class="btn btn-dark btn-block">Créer un groupe</button>
                </div>
            </form>
        </div>
    </div>
</div>

</form>
    

@endsection