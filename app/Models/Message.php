<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages'; // Nom de la table dans la base de données
    protected $fillable = ['name', 'email', 'message']; // Champs autorisés à remplir
}
