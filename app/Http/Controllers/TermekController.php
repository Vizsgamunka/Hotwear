<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use App\Models\Modell;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TermekController extends Controller
{
    public function osszesTermek(){
        $termekek =  Termek::all();
        return $termekek;
    }

    public function termek($id)
    {
        $termek = Termek::find($id);
        return $termek;
    }

    public function termekhez_tartozo_modell($id){
        $modell_nev = DB::table('modells as m')
        ->select('nev')
        ->join('termeks as t', 'm.modell_id', '=', 't.modell')
        ->where('t.termek_id','=', $id)
        ->get();
        return $modell_nev;
    }
}