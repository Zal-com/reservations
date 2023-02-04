@extends('layouts.app')

@section('content')
    <h2>Liste des localités</h2>

    <ul>
        @foreach($localities as $locality)
            <li>{{ $locality->postal_code }}  {{$locality->locality}}</li>
        @endforeach
    </ul>

@endsection
