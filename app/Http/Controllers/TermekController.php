<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use Illuminate\Http\Request;

class TermekController extends Controller
{
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
