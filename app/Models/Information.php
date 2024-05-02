<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'information'; // Nom de la table dans la base de données
    protected $fillable = ['email', 'phone', 'address']; // Champs remplissables
}
