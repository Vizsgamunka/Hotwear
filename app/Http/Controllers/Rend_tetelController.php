<?php

namespace App\Http\Controllers;

use App\Models\Rend_tetel;
use Illuminate\Http\Request;

class Rend_tetelController extends Controller
{
    public function index()
    {
        $rend_tetels =  Rend_tetel::all();
        return $rend_tetels;
    }

    public function show($id)
    {
        $rend_tetels = Rend_tetel::find($id);
        return $rend_tetels;
    }

    public function destroy($id)
    {
        Rend_tetel::find($id)->delete();
    }
    public function store(Request $request)
    {
        $rend_tetels  = new Rend_tetel();
        $rend_tetels ->rendeles = $request->rendeles;
        $rend_tetels ->termek = $request->termek;
        $rend_tetels ->rend_menny = $request->rend_menny;
        $rend_tetels ->save();
    }
    public function update(Request $request, $id)
    {
        $rend_tetels = Rend_tetel::find($id);
        $rend_tetels ->rendeles = $request->rendeles;
        $rend_tetels ->termek = $request->termek;
        $rend_tetels ->rend_menny = $request->rend_menny;
        $rend_tetels ->save();
    }
}
