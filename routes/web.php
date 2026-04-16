<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Page d'accueil : Redirige vers la liste des tâches
// Le middleware 'auth' ici forcera la redirection vers /login si l'utilisateur n'est pas connecté
Route::get('/', function () {
    return redirect()->route('tasks.index');
})->middleware(['auth']);

/*
|--------------------------------------------------------------------------
| Routes Protégées (Connexion requise)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Gestion des Tâches (CRUD complet)
    Route::resource('tasks', TaskController::class);

    // Gestion du Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Authentification (Login, Register, etc.)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
