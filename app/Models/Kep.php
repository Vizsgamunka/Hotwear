<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kep extends Model
{
    use HasFactory;
    protected $primaryKey = 'kep_id';
    protected $fillable = [
        'eleresi_ut',
        'modell'
    ];
}
