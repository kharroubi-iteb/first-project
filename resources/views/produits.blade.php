<h1>Liste des produits</h1>

@foreach ($produits as $produit)

<p>{{ $produit['nom'] }} - {{ $produit['prix'] }} €</p>

@endforeach
