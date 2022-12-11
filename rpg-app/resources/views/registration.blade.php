@extends('layouts.app')

@section('title','Inscription')

@section('img','background-connexion')

@section('content')

<div class="row justify-content-center" style="margin-bottom:11em">
	<div class="col-md-4" style="margin-top: 10em;">
		<div class="card">
		<div class="card-header">Formulaire d'inscription</div>
		<div class="card-body">
			<form action="{{ route('sample.validate_registration') }}" method="POST">
				@csrf
				<div class="form-group mb-3">
					<input type="text" name="firstname" class="form-control" placeholder="Prénom" />
					@if($errors->has('firstname'))
						<span class="text-danger">{{ $errors->first('firstname') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="text" name="lastname" class="form-control" placeholder="Nom" />
					@if($errors->has('lastname'))
						<span class="text-danger">{{ $errors->first('lastname') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="text" name="pseudo" class="form-control" placeholder="Pseudo" />
					@if($errors->has('pseudo'))
						<span class="text-danger">{{ $errors->first('pseudo') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="text" name="email" class="form-control" placeholder="Email Address" />
					@if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password" />
					@if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<div class="d-grid mx-auto">
					<button type="submit" class="btn btn-dark btn-block">S'inscrire</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection('content')