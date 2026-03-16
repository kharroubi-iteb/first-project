<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Site Laravel')</title>

    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body { font-family: Arial, sans-serif; }
        nav { background:#FF2D20; padding:15px; }
        nav a { color:white; margin-right:15px; text-decoration:none; font-weight:bold; }
        nav a:hover { opacity:0.8; }
        .container { max-width:1200px; margin:40px auto; padding:0 20px; }
        footer { background:#333; color:white; text-align:center; padding:20px; margin-top:50px; }
    </style>

    @yield('styles') {{-- section pour CSS personnalisé --}}
</head>
<body>

{{-- Navigation --}}
<nav>
    <a href="/">Accueil</a>
    <a href="/about">À propos</a>
    <a href="/services">Services</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
</nav>

{{-- Contenu principal --}}
<div class="container">
    @yield('content')
</div>

{{-- Footer --}}
<footer>
    <p>&copy; {{ date('Y') }} Mon Site Laravel. Tous droits réservés.</p>
</footer>

@yield('scripts') {{-- section pour JS spécifique --}}
</body>
</html>
