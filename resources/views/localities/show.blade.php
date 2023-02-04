@extends('layouts.app')

@section('content')
    <h2>Listes des salles dans {{ $locations->first->locality->locality->postal_code }} - {{ $locations->first->locality->locality->locality }}</h2>
<ul>
    @foreach($locations as $location)
        <li>{{$location->designation}}</li>
    @endforeach
</ul>

@endsection
