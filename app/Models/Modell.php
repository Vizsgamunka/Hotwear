<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modell extends Model
{
    use HasFactory;
    protected $primaryKey = 'modell_id';
    protected $fillable = [
        'nev',
        'tervezo',
        'leiras',
        'kep',
        'szezon',
        'max_mennyiseg',
        'kategoria'
    ];
}
