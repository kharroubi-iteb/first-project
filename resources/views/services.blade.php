@extends('layouts.app')

@section('title', 'Services')

@section('content')
<h1 style="color: #FF2D20;">Nos Services</h1>
<ul>
@foreach($services as $service)
    <li>{{ $service['nom'] }} - Prix : {{ $service['prix'] }} $</li>
@endforeach
</ul>
@endsection
