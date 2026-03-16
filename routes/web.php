<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Page accueil
Route::get('/', function () {
    return view('welcome');
});

// Pages via le contrôleur
Route::get('/home', [PageController::class,'home']);
Route::get('/about', [PageController::class,'about']);
Route::get('/contact', [PageController::class,'contact']);
Route::get('/services', [PageController::class,'services']);
Route::get('/blog', [PageController::class, 'blog']);

// Exemple de routes supplémentaires
Route::get('/utilisateur/{nom}', function ($nom) {
    return "<h1>Profil de $nom</h1>
            <p>Bienvenue sur votre page !</p>";
});

Route::get('/article/{id}/{titre}', function ($id, $titre) {
    return "<h1>Article #$id : $titre</h1>";
});

Route::get('/bonjour/{nom?}', function ($nom = 'Visiteur') {
    return "<h1>Bonjour, $nom !</h1>";
});

Route::get('/produit/{id}', function ($id) {
    return "<h1>Produit #$id</h1>";
})->where('id', '[0-9]+');

Route::get('/calculer/{a}/{b}', function ($a, $b) {
    $somme = $a + $b;
    return "La somme de $a et $b est : $somme";
});

Route::get('/age/{age}', function ($age) {
    return $age >= 18 ? "Vous êtes majeur" : "Vous êtes mineur";
});

Route::get('/equipe/{membre?}', function ($membre = 'toute lequipe') {
    return "membre : $membre";
});

Route::get('/profil', function () {
    return view('profil', [
        'nom' => 'Alice',
        'age' => 25,
        'ville' => 'Paris'
    ]);
});

Route::get('/produits', function(){
    $produits = [
        ['nom'=>'ordinateur','prix'=>258],
        ['nom'=>'souris','prix'=>255],
        ['nom'=>'clavier','prix'=>155]
    ];
    return view('produits',['produits'=>$produits]);
});
