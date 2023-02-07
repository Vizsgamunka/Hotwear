<?php

namespace App\Http\Controllers;

use App\Models\Rendeles;
use Illuminate\Http\Request;

class RendelesController extends Controller
{
    public function index()
    {
        $rendeles =  Rendeles::all();
        return $rendeles;
    }

    public function show($id)
    {
        $rendeles = Rendeles::find($id);
        return $rendeles;
    }

    public function destroy($id)
    {
        Rendeles::find($id)->delete();
    }
    public function store(Request $request)
    {
        $rendeles  = new Rendeles();
        $rendeles ->kelt = $request->kelt;
        $rendeles ->megrendelo = $request->megrendelo;
        $rendeles ->statusz = $request->statusz;
        $rendeles ->save();
    }
    public function update(Request $request, $id)
    {
        $rendeles = Rendeles::find($id);
        $rendeles ->kelt = $request->kelt;
        $rendeles ->megrendelo = $request->megrendelo;
        $rendeles ->statusz = $request->statusz;
        $rendeles ->save();
    }
}
