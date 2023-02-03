<?php

namespace App\Http\Controllers;

use App\Models\Kep;
use Illuminate\Http\Request;

class KepController extends Controller
{
    
    public function index()
    {
        $keps =  Kep::all();
        return $keps;
    }
    public function show($id)
    {
        $keps = Kep::find($id);
        return $keps;
    }
    public function destroy($id)
    {
        Kep::find($id)->delete();
    }
    public function store(Request $request)
    {
        $keps  = new Kep();
        $keps ->eleresi_ut = $request->eleresi_ut;
        $keps ->modell = $request->modell;
        $keps ->save();
    }
    public function update(Request $request, $id)
    {
        $keps = Kep::find($id);
        $keps ->eleresi_ut = $request->eleresi_ut;
        $keps ->modell = $request->modell;
        $keps ->save();
    }
}
