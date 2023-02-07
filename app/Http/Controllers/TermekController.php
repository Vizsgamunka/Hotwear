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

    public function index()
    {
        $termeks =  Termek::all();
        return $termeks;
    }

    public function show($id)
    {
        $termeks = Termek::find($id);
        return $termeks;
    }

    public function destroy($id)
    {
        Termek::find($id)->delete();
    }
    public function store(Request $request)
    {
        $termeks  = new Termek();
        $termeks ->modell = $request->modell;
        $termeks ->meret = $request->meret;
        $termeks ->ar = $request->ar;
        $termeks ->save();
    }
    public function update(Request $request, $id)
    {
        $termeks = Termek::find($id);
        $termeks ->modell = $request->modell;
        $termeks ->meret = $request->meret;
        $termeks ->ar = $request->ar;
        $termeks ->save();
    }
}

