<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use App\Models\Modell;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class TermekController extends Controller
{
    public function osszesTermek(){
       /*  $termekek =  Termek::all();
        return $termekek; */

        $termekek = DB::table('termeks as t')
        ->select('m.kep', 'm.nev', 't.ar')
        ->join('modells as m', 't.modell', '=', 'm.modell_id' )
        ->get();
        return $termekek;
    }

    public function index(){
        $termeks =  Termek::all();
        return $termeks;
    }

    public function show($id){
        $termeks = Termek::find($id);
        return $termeks;
    }

    public function destroy($id){
        Termek::find($id)->delete();
    }
    public function store(Request $request){
        $termeks  = new Termek();
        $termeks ->modell = $request->modell;
        $termeks ->meret = $request->meret;
        $termeks ->ar = $request->ar;
        $termeks ->save();
    }
    public function update(Request $request, $id){
        $termeks = Termek::find($id);
        $termeks ->modell = $request->modell;
        $termeks ->meret = $request->meret;
        $termeks ->ar = $request->ar;
        $termeks ->save();
    }

    public function adottTermekekNevSzerint($id){
        $termek_nev_szerint = DB::table('termeks as t')
        ->select('m.kep', 'm.nev', 't.ar')
        ->join('modells as m', 't.modell', '=', 'm.modell_id' )
        ->where('m.nev', 'LIKE', '%'.$id.'%')
        ->get();
        return $termek_nev_szerint;
    }

    public function adottTermekekArSkalaSzerint($minAr, $maxAr){
        $termek_ar_szerint = DB::table('termeks as t')
        ->select('m.kep', 'm.nev', 't.ar')
        ->join('modells as m', 't.modell', '=', 'm.modell_id' )
        ->whereBetween('t.ar', [$minAr, $maxAr])
        ->get();
        return $termek_ar_szerint;
    }

    public function adottTermekekMeretSzerint($id){
        $termek_meret_szerint = DB::table('termeks as t')
        ->select('m.kep', 'm.nev', 't.ar')
        ->join('modells as m', 't.modell', '=', 'm.modell_id' )
        ->where('t.meret', 'LIKE', $id)
        ->get();
        return $termek_meret_szerint;
    }
}