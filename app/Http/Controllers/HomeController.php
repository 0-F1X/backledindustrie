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
        $informations = Information::all(); // Récupérer toutes les infos
        return view('home', compact('messages', 'images' , 'informations'));
    } 

    public function storeInformation(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Information::create([
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);

        return redirect()->back()->with('success', 'Informations ajoutées avec succès.');
    }
}
