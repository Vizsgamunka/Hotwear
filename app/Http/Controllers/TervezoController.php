<?php

namespace App\Http\Controllers;

use App\Models\Tervezo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Termek;
use App\Models\Modell;

class TervezoController extends Controller
{
    public function index(){
        $tervezok =  Tervezo::all();
        return $tervezok;
    }

    public function show($id)
    {
        $tervezo = Tervezo::find($id);
        return $tervezo;
    }

    public function destroy($id)
    {
        Tervezo::find($id)->delete();
    }

    public function adott_tervezohoz_tartozo_termekek($id)
    {
        $tervezo_termekei = DB::table('termeks as t')
        ->select('m.kep', 'm.nev', 't.ar')
        ->join('modells as m', 't.modell', '=', 'm.modell_id' )
        ->join('tervezos as tr', 'm.tervezo', '=', 'tr.t_azon')
        ->where('tr.t_azon', '=', $id)
        ->get();
        return $tervezo_termekei;
    }
}
