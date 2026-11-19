@extends('layouts.app')

@section('titre', 'Modifier l\'article')

@section('contenu')
<h2>Modifier l'article</h2>

<form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('PUT')

    <label>Titre</label>
    <input type="text" name="titre" value="{{ old('titre', $post->titre) }}">
    @error('titre') <div class="error">{{ $message }}</div> @enderror

    <label>Contenu</label>
    <textarea name="contenu" rows="6">{{ old('contenu', $post->contenu) }}</textarea>
    @error('contenu') <div class="error">{{ $message }}</div> @enderror

    <button type="submit" class="btn">Mettre à jour</button>
</form>
@endsection
