<?php

namespace App\Http\Controllers;

use App\Models\Receptek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptController extends Controller
{
    public function osszes_recept() {
        $receptek = DB::table("recepteks as r")
        ->join('kategorias as k', 'k.id', '=', 'r.kat_id')
        ->select("k.nev", "r.*")
        ->get();
        return $receptek;
    }

    public function uj_recept($request){
        $recept = new Receptek();
        $recept->nev = $request->nev;
        $recept->kat_id = $request->kat_id;
        $recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recept->leiras = $request->leiras;
    }

    public function recept_torles($id){
        Receptek::find($id)->delete();
    }
}
