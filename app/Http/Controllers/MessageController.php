<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; // Assurez-vous d'importer le modèle Message

class MessageController extends Controller
{
    // Autres méthodes du contrôleur...

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
    
        // Créer une nouvelle instance de Message avec les données du formulaire
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
    
        // Enregistrer le message dans la base de données
        $message->save();
    
        // Rediriger l'utilisateur vers une autre page ou afficher un message de succès
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }    
}
