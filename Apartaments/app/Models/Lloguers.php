<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloguers extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'Dni',
        'id',
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
