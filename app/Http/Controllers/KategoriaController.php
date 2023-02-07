<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use App\Models\Termek;
use App\Models\Modell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    public function index()
    {
        $kategorias =  Kategoria::all();
        return $kategorias;
    }

    public function show($id)
    {
        $kategoria = Kategoria::find($id);
        return $kategoria;
    }

    public function destroy($id)
    {
        Kategoria::find($id)->delete();
    }

    public function store(Request $request)
    {
        $kategorias  = new Kategoria();
        $kategorias ->nev = $request->nev;
        $kategorias ->save();
    }

    public function update(Request $request, $id)
    {
        $kategorias = Kategoria::find($id);
        $kategorias ->nev = $request->nev;
        $kategorias ->save();
    }

    public function adottKategoriahozTartozoTermekek($id)
    {
        $kategoria_termekei = DB::table('termeks as t')
        ->select('m.kep', 'm.nev', 't.ar')
        ->join('modells as m', 't.modell', '=', 'm.modell_id' )
        ->join('kategorias as k', 'm.kategoria', '=', 'k.kategoria_id')
        ->where('k.kategoria_id', '=', $id)
        ->get();
        return $kategoria_termekei;
    }
    
}
