@extends('layouts.app')

@section('title','Création personnage')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
        <div class="card-header">Ajouter un personnage</div>
        <div class="card-body">
            <form action="{{route('characters.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="character_name" class="form-control" placeholder="Nom du personnage"/>
                    @if($errors->has('character_name'))
                        <span class="text-danger">{{ $errors->first('character_name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="character_description"></textarea>
                        <label for="floatingTextarea">Comments</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div>
                        <select class="form-select" aria-label="Default select example" name="speciality" id="speciality">
                            <option selected>Spéciality</option>
                            <option value="Guerrier">Guerrier</option>
                            <option value="Mage">Mage</option>
                            <option value="Druide">Druide</option>
                            <option value="Assassin">Assassin</option>
                            <option value="Berseker">Berseker</option>
                            <option value="Archer">Archer</option>
                          </select>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="stat" name="mag" readonly value={{$mag}}>
                        <label for="mag">Magie</label>
                    </div>
                    @if($errors->has('mag'))
                        <span class="text-danger">{{ $errors->first('mag') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="stat" name="for" readonly value={{$for}}>
                        <label for="for">Force</label>
                    </div>
                    @if($errors->has('mag'))
                        <span class="text-danger">{{ $errors->first('for') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="stat" name="agi" readonly value={{$agi}}>
                        <label for="agi">Agilité</label>
                    </div>
                    @if($errors->has('mag'))
                        <span class="text-danger">{{ $errors->first('agi') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="stat" name="int" readonly value={{$int}}>
                        <label for="int">Intelligence</label>
                    </div>
                    @if($errors->has('mag'))
                        <span class="text-danger">{{ $errors->first('int') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="stat" name="pv" readonly value={{$pv}}>
                        <label for="pv">PV</label>
                    </div>
                    @if($errors->has('mag'))
                        <span class="text-danger">{{ $errors->first('pv') }}</span>
                    @endif
                </div>
                    <button type="submit" class="btn btn-dark btn-block">Valider Personnage</button>
                </div>
            </form>
        </div>
    </div>
</div>

</form>
<button id="randomStat">Changer de statistique</button>
    


    

@endsection