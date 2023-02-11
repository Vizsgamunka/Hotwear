<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tervezo extends Model
{
    use HasFactory;
    protected $primaryKey = 't_azon';
    protected $fillable = [
        'nev',
        'kep',
        'leiras'
    ];

    public function tervezo(){
        return $this->hasMany(Modell::class, 'tervezo', 't_azon');
    } 


}
