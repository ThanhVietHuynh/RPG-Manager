@extends('layouts.app')

@section('title','Connexion')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif

<div class="row justify-content-center" style="margin: 5em;">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Formulaire de connexion</div>
			<div class="card-body">
				<form action="{{ route('sample.validate_login') }}" method="post">
					@csrf
					<div class="form-group mb-3">
						<input type="text" name="email" class="form-control" placeholder="Email" />
						@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
					</div>
					<div class="form-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Mot de passe" />
						@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
					</div>
					<div class="d-grid mx-auto">
						<button type="submit" class="btn btn-dark btn-block">Connexion</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection('content')