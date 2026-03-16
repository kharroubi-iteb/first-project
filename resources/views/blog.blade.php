<h1>Notre Blog</h1>

@foreach($articles as $article)
    <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
        <h2>{{ $article['titre'] }}</h2>
        <p>{{ $article['contenu'] }}</p>
        <small>Article #{{ $article['id'] }}</small>
    </div>
@endforeach
