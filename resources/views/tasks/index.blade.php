@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mes Tâches</h1>

    {{-- Afficher l'utilisateur connecté --}}
    <p>Bienvenue, <strong>{{ auth()->user()->name }}</strong></p>

    {{-- Bouton de déconnexion --}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Déconnexion</button>
    </form>

    <hr>

    {{-- Ici ton tableau ou ta liste de tâches --}}
</div>
@endsection
