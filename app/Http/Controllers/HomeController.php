<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware d'authentification pour accéder à la page d'accueil
    }

    public function index()
    {
        $images = Image::all(); // Récupérer toutes les images
        return view('home', compact('images'));
    }

    public function store(Request $request)
    {
        // Valider les données de la requête pour le stockage d'une nouvelle image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        // Stocker l'image dans le système de fichiers
        $imagePath = $request->file('image')->store('public/images');

        // Créer une nouvelle instance de Image avec les données du formulaire
        $image = new Image();
        $image->path = $imagePath;
        $image->title = $request->title;
        $image->description = $request->description;
        $image->save();

        // Rediriger avec un message de succès
        return redirect()->route('home')->with('success', 'Image ajoutée avec succès.');
    }
}
