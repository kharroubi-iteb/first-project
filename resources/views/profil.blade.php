<h1>Profil de {{ $nom }}</h1>

<p>Age : {{ $age }}</p>

<p>Ville : {{ $ville }}</p>

@if ($age >= 18)
<p style="color:green;">Vous êtes majeur</p>
@else
<p style="color:orange;">Vous êtes mineur</p>
@endif
