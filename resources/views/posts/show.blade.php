@extends('layouts.app')

@section('titre', $post->titre)

@section('contenu')
<h2>{{ $post->titre }}</h2>
<p><small>Publié le {{ $post->created_at->format('d/m/Y') }}</small></p>
<p>{{ $post->contenu }}</p>

<a href="{{ route('posts.index') }}">← Retour à la liste</a>

<a href="{{ route('posts.edit', $post) }}" class="btn">Modifier</a>

<form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:inline;"
    onsubmit="return confirm('Supprimer cet article ?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn" style="background:#c0392b;">Supprimer</button>
</form>

<br><br>
@endsection
