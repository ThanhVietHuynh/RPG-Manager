@extends('layouts.app')

@section('title','Modifier personnage')

@section('content')

@section('img','background-character')

<div class="row justify-content-center"">
	<div class="col-md-4" style="margin: 5em;">
		<div class="card">
			<div class="card-header">Modifier votre personnage</div>
			<div class="card-body">
				<form action="{{ route('characters.update', $character) }}" method="post">
                    @csrf
                    @method('PUT')
					<div class="form-group mb-3">
						<input type="text" name="character_name" class="form-control" value="{{ $character->character_name }}"/>
						@if($errors->has('character_name'))
							<span class="text-danger">{{ $errors->first('character_name') }}</span>
						@endif
					</div>
                    <div class="form-group mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea" name="character_description" value="">{{ $character->character_description }}</textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div>
                            <select class="form-select" aria-label="Default select example" name="speciality" id="speciality">
                                <option selected>{{ $character->speciality }}</option>
                                <option value="Guerrier">Guerrier</option>
                                <option value="Mage">Mage</option>
                                <option value="Druide">Druide</option>
                                <option value="Assassin">Assassin</option>
                                <option value="Berseker">Berseker</option>
                                <option value="Archer">Archer</option>
                              </select>
                        </div>
                    </div>
					<div class="d-grid mx-auto">
						<button type="submit" class="btn btn-dark btn-block">Modifier</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection