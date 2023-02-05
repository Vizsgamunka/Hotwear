<?php

namespace App\Http\Controllers;

use App\Models\Tervezo;
use Illuminate\Http\Request;

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

    
}
