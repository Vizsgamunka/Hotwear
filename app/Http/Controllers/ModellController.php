<?php

namespace App\Http\Controllers;

use App\Models\Modell;
use Illuminate\Http\Request;

class ModellController extends Controller
{
    public function index()
    {
        $modell =  Modell::all();
        return $modell;
    }

    public function show(Modell $modell)
    {
        return $modell->load([
            'tervezoObj',
            'kategoriaObj',
            'termekek'
        ]);

    }

    public function destroy($id)
    {
        Modell::find($id)->delete();
    }
    public function store(Request $request)
    {
        $modell  = new Modell();
        $modell ->nev = $request->nev;
        $modell ->tervezo = $request->tervezo;
        $modell ->kep = $request->kep;
        $modell ->szezon = $request->szezon;
        $modell ->max_mennyiseg = $request->max_mennyiseg;
        $modell ->kategoria = $request->kategoria;
        $modell ->save();
    }
    public function update(Request $request, $id)
    {
        $modell = Modell::find($id);
        $modell ->nev = $request->nev;
        $modell ->tervezo = $request->tervezo;
        $modell ->kep = $request->kep;
        $modell ->szezon = $request->szezon;
        $modell ->max_mennyiseg = $request->max_mennyiseg;
        $modell ->kategoria = $request->kategoria;
        $modell ->save();
    }

    
}
