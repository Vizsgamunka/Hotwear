<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tervezo extends Model
{
    use HasFactory;
    protected $primaryKey = 't_azon';
    protected $fillable = [
        'nev'
    ];

    public function tasktervezokRuhai()
    {
        return $this->hasMany(Tervezo::class, 'task_range_id', 'task_range_id');
    }
}
