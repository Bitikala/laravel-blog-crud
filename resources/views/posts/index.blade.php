@extends('layouts.app')

@section('titre', 'Articles')

@section('contenu')
<a href="{{ route('posts.create') }}" class="btn">+ Nouvel article</a>
<br><br>

@forelse($posts as $post)
<div class="carte">
    <h3>{{ $post->titre }}</h3>
    <p>{{ \Illuminate\Support\Str::limit($post->contenu, 100) }}</p>
    <a href="{{ route('posts.show', $post) }}">Lire la suite</a>
</div>
@empty
<p>Aucun article pour le moment.</p>
@endforelse
@endsection
