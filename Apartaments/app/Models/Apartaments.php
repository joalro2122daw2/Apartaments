<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartaments extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id',
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
