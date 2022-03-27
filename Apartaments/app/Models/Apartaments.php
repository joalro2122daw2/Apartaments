<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartaments extends Model
{
    use HasFactory;
    protected $fillable = [
        'Codi_unic',
        'Referenciacatastral',
        'Ciutat',
        'Barri',
        'Nomcarrer',
        'Numcarrer',
        'Pis',
        'Nombrellits',
        'Nombrehabitacions',
        'Ascensor',
        'Calefaccio',
        'Airecondicionat'
    ];
}
