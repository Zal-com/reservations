@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>

    <div><a href="{{ route('artists.edit' ,$artist->id) }}">Modifier</a></div>

<form method="post" action="{{ route('artists.delete', $artist->id) }}">
		@csrf
		@method('DELETE')
		<button>Supprimer</button>
</form>

    <nav><a href="{{ route('artists.index') }}">Retour à l'index</a></nav>
@endsection
