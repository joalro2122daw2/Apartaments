<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloguers extends Model
{
    use HasFactory;
    protected $fillable = [
        'Dni',
        'Codi_unic',
        'Datainici',
        'Horainici',
        'Datafi',
        'Horafi',
        'Lloclliuclaus',
        'Llocdevclaus',
        'Preudia',
        'Diposit',
        'Quantdiposit',
        'Tipusasseguranca'
    ];
}
