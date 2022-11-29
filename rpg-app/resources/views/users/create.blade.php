@extends('layouts.app')


@section('content')

    <h1>Créer un compte</h1>


    <form action="{{route('users.store')}}" method="POST">
        @csrf

        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" 
            placeholder="Entrez votre nom" name="lastname"/>
        </div>

        <div>

            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" 
            placeholder="Entrez votre prénom" name="firstname"/>

        </div>

        <div>

            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" 
            placeholder="Entrez votre pseudo" name="pseudo"/>

        </div>

        <div>

            <label for="email">Email :</label>
            <input type="email" id="email" 
            placeholder="Entrez votre email" name="email"/>

        </div>
        <div>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" 
            placeholder="Entrez votre mot de passe" name="password"/>

        </div>

        <button type="submit">Créer mon compte</button>

    </form>

@endsection