@extends('layouts.app')

@section('titre', 'Nouvel article')

@section('contenu')
<h2>Nouvel article</h2>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <label>Titre</label>
    <input type="text" name="titre" value="{{ old('titre') }}">
    @error('titre') <div class="error">{{ $message }}</div> @enderror

    <label>Contenu</label>
    <textarea name="contenu" rows="6">{{ old('contenu') }}</textarea>
    @error('contenu') <div class="error">{{ $message }}</div> @enderror

    <button type="submit" class="btn">Enregistrer</button>
</form>
@endsection
