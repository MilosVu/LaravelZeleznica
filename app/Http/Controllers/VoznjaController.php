<?php

namespace App\Http\Controllers;

use App\Voznja;
use Illuminate\Http\Request;

class VoznjaController extends Controller
{
    public function index()
    {
        $voznje = Voznja::all();
        return view('voznje', [
            'voznje' => $voznje
        ]);
    }
    public function delete(Request $request)
    {
        $voznja = Voznja::find($request->voznja_id);
        if ($voznja->delete())
            return response()->json([
                'message' => "Uspesno obrisana voznja!"
            ]);
        return response()->json([
            'message' => "Voznja je vec izbrisan!"
        ]);
    }
    public function getForma(Request $request)
    {
        $voznja_id = $request->query('voznja_id');
        $voznja = Voznja::find($voznja_id);

        return view('voznja', [
            'voznja' => $voznja
        ]);
    }
}
