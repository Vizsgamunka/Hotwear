<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termek extends Model
{
    use HasFactory;
    protected $primaryKey = 'termek_id';
    protected $fillable = [
        'modell',
        'meret',
        'keszlet'
    ];

    public function modellObj(){
        return $this->belongsTo(Modell::class, 'modell', 'modell_id');
    }

}
