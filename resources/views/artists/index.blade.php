@extends('layouts.app')
@section('title', 'Liste des artistes')

@section('content')
    <h2>Liste des artistes</h2>

    <ul>
        @foreach($artists as $artist)
            <li><a href="{{ route('artists.show', $artist->id) }}">{{ $artist->firstname }}  {{$artist->lastname}}</a></li>
        @endforeach
    </ul>

@endsection
