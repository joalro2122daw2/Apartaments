<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
use HasFactory;
    protected $fillable = [
        'Dni',
        'Nomcognoms',
        'Edat',
        'Tel',
        'Adreca',
        'Ciutat',
        'Pis',
        'Email',
        'Tipustargeta',
        'Numtargeta'
    ];
}
