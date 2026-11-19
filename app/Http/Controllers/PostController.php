<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
    
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Liste des articles
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */

    //Enregistrement d'un nouvel article
    
    public function create()
    {
return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')
            ->with('success', 'Article créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    
    //Détail d'un article
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    //
    // Formulaire de modification
public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}


    /**
     * Update the specified resource in storage.
     */
// Enregistrer la modification
public function update(Request $request, Post $post)
{
    $validated = $request->validate([
        'titre' => 'required|string|max:255',
        'contenu' => 'required|string',
    ]);

    $post->update($validated);

    return redirect()->route('posts.show', $post)
        ->with('success', 'Article modifié avec succès.');
}

// Supprimer
public function destroy(Post $post)
{
    $post->delete();

    return redirect()->route('posts.index')
        ->with('success', 'Article supprimé.');
}
    
}
