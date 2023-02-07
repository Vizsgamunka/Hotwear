<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

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
    
}
