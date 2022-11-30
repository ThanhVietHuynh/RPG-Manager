@extends('layouts.app')


@section('content')
 
@foreach ($charactersList as $item)
    
<table class="table table-bordered">

    <tr>
        <th>Nom du personnage:</th>
        <td>{{ $item['character_name'] }}</td>
    </tr>

    <tr>

        <th>Description:</th>
        <td>{{ $item['character_description'] }}</td>

    </tr>

    <tr>

        <th>Type</th>
        <td>{{ $item['speciality'] }}</td>

    </tr>

</table>
@endforeach

@endsection