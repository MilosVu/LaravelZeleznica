<?php

namespace App\Http\Controllers;

use App\Korisnik;
use App\Voznja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KorisnikController extends Controller
{
    public function index()
    {
        $korisnici = Korisnik::all();
        return view('korisnici', [
            'korisnici' => $korisnici
        ]);
    }
    public function store(Request $request)
    {
        $broj_telefona = "" . $request->pozivni . " " . $request->broj_telefona;
        $ime_prezime = $request->ime . " " . $request->prezime;
        $voznja_id = $request->voznja_id;
        if (Voznja::find($voznja_id)->smanjiMesta($request->broj_karata))
            DB::table('korisnik')->insert([
                'ime_prezime' => $ime_prezime,
                'email' => $request->email,
                'broj_telefona' => $broj_telefona,
                'broj_karata' => $request->broj_karata,
                'voznja_id' => $request->voznja_id,
            ]);

        return view('welcome');
    }
}
