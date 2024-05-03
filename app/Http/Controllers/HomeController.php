<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Image;
use App\Models\Information;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware d'authentification pour accéder à la page d'accueil
    }

    public function index()
    {
        $messages = Message::all(); // Récupérer tous les messages
        $images = Image::all(); // Récupérer toutes les images
        $informations = Information::all(); // Récupérer toutes les informations

        return view('home', compact('messages', 'images', 'informations'));
    }

    public function storeInformation(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        // Créer une nouvelle entrée dans la table 'informations'
        Information::create([
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('home')->with('success', 'Informations ajoutées avec succès.');
    }
}
