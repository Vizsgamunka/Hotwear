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
        'kategoria',
        'ar'
    ];
    public function termekek(){
        return $this->hasMany(Termek::class, 'modell', 'modell_id');
    }
    public function tervezoObj(){
        return $this->belongsTo(Tervezo::class, 'tervezo', 't_azon');
    } 
    public function kategoriaObj(){
        return $this->belongsTo(Kategoria::class, 'kategoria', 'kategoria_id');
    } 

}
