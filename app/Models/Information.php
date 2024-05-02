<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',  // Add 'email' to the fillable array
        'phone',  // Assuming 'phone' and 'address' are also fillable
        'address',
    ];
}
