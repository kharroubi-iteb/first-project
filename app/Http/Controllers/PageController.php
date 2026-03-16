<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $titre = "À propos de nous";
        $description = "Nous sommes une équipe qui travaille avec Laravel.";

        return view('about', compact('titre','description'));
    }

    public function contact()
    {
        $contacts = [
            'email' => 'contact@site.com',
            'telephone' => '123456789',
            'adresse' => 'Tunis'
        ];

        return view('contact', compact('contacts'));
    }

    public function services()
    {
        $services = [
            ['nom'=>'Développement Web','prix'=>500],
            ['nom'=>'Application Mobile','prix'=>800],
            ['nom'=>'Consulting Laravel','prix'=>300]
        ];

        return view('services', compact('services'));
    }
public function blog()
{
    $articles = [
        ['id'=>1, 'titre'=>'Laravel pour débutants', 'contenu'=>'Apprenez les bases de Laravel.'],
        ['id'=>2, 'titre'=>'Les routes et controllers', 'contenu'=>'Comprendre comment fonctionnent les routes et les controllers.'],
        ['id'=>3, 'titre'=>'Blade Templates', 'contenu'=>'Comment créer des vues dynamiques avec Blade.']
    ];

    return view('blog', compact('articles'));
}
}
