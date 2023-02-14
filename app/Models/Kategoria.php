<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'kategoria_id';
    protected $fillable = [
        'nev'
    ];

    public function modellek(){
        return $this->hasMany(Modell::class, 'kategoria', 'kategoria_id');
    }
}
