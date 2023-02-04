@extends('layouts.app')
@section('title', 'Liste des artistes')

@section('content')
    <h2>Liste des artistes</h2>

<ul>
    <li><a href="{{ route('artists.create') }}">Ajouter</a></li>
</ul>

<table>
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($artists as $artist)
            <tr>
                <td><a href="{{ route('artists.show', $artist->id) }}">{{ $artist->firstname }}  {{$artist->lastname}}</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
