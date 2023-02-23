<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KosarController extends Controller {


    public function kosarTartalma() {
        $kosar = Session::get('termekek', []);
        $tomb = [];
        foreach ($kosar as $elem) {
            $termek = Termek::find($elem['id'])->load('modellObj');
            $mennyiseg = $elem['mennyiseg'];
            $tomb[] = ['termek' => $termek, 'mennyiseg' => $mennyiseg];
        }






        return $tomb;

    }





    public function kosarhozAd(Request $request) {
        $termek = Termek::findOrFail($request->id);
        $termekek = $request->session()->get("termekek", null);
        if ($termekek == null) {
            // Ha a "termekek" változó még nem létezik, létrehozunk egy új tömböt a kiválasztott termékkel
            $termekek = [
                ["id" => $request->id, "mennyiseg" => $request->mennyiseg]
            ];
        } else {
            // Ellenőrizni kell, hogy a kiválasztott termék már szerepel-e a "termekek" tömbben
            $termekIndex = array_search($request->id, array_column($termekek, 'id'));
            if ($termekIndex !== false) {
                // Ha a termék már szerepel, akkor csak növeljük a mennyiséget
                $termekek[$termekIndex]['mennyiseg'] += $request->mennyiseg;
            } else {
                // Ha a termék még nem szerepel, akkor hozzáadjuk a listához
                $termekek[] = ["id" => $request->id, "mennyiseg" => $request->mennyiseg];
            }
        }

        Session::put("termekek", $termekek);
        return \session()->get("termekek");
        //return redirect()->back()->with('success', 'A terméket sikeresen hozzáadtuk a kosárhoz!');
    }
}
