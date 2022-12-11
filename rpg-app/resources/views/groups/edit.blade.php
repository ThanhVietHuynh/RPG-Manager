@extends('layouts.app')

@section('title','Création personnage')

@section('img','background-group')

@section('content')
<div class="container-image">

</div>
<div class="row justify-content-center" style="margin: 5em; margin-bottom: 20em">
    <div class="col-md-4">
        <div class="card">
        <div class="card-header">Modifier le groupe</div>
        <div class="card-body">
            <form action="{{route('groups.update', $groups)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <div class="form-floating">
                        <input type="text" name="group_name" class="form-control" placeholder="Nom du groupe" value="{{ $groups->group_name }}"/>
                        @if($errors->has('group_name'))
                            <span class="text-danger">{{ $errors->first('group_name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Ajouter une description" id="floatingTextarea" name="group_description" value="{{ $groups->group_description }}"></textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <input type="number" name="number_place" min="2" class="form-control" placeholder="Nombre de place"value="{{ $groups->number_place }}"/>
                    @if($errors->has('number_place'))
                        <span class="text-danger">{{ $errors->first('number_place') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="">Choisissez les personnages</label>
                    <div>
                        @foreach ($groups as $item)
                        <input type="checkbox" 
                        value="{{ $item->group_id->character_name }}" name="group_id" id="">
                        <label name="group_id" for="">{{ $item->group_id->character_name }}</label>
                        @endforeach
                    </div>
                </div>
                    <button type="submit" class="btn btn-dark btn-block">Modifier le groupe</button>
                </div>
            </form>
        </div>
    </div>
</div>


    

@endsection