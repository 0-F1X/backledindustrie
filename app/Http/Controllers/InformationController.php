<?php

// app/Http/Controllers/InformationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function index()
    {
        $information = Information::first(); // Récupère la première ligne de la table 'information'

        return view('index', compact('information')); // Retourne la vue 'index'
    } 

    public function store(Request $request)
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
