@extends('layouts.app')

@section('content')
    <h2>Localités</h2>

    <p>{{ $locality->postal_code }}  {{$locality->locality}}</p>

@endsection
