@extends('layouts.app')

@section('content')
    <h2>{{ $artist->firstname }} {{ $artist->lastname }}</h2>

<div><a href="{{ route('artists.edit' ,$artist->id) }}">Modifier</a></div>

@endsection


