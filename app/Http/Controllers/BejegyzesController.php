<?php

namespace App\Http\Controllers;
//
use App\Models\Bejegyzes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BejegyzesController extends Controller
{
    //
    //osszes bejegyzes osszekapcs. tevekesegekkel
    public function index()
    {
        $bejegyzesek = response()->json(Bejegyzes::with('tevekenyseg')->get());
        return $bejegyzesek;
    }

   //osztalyok altal vegzett tevekenysegek listaja
    public function osztalyBejegyzesei($osztalyId)    {
        $bejegyzesek = Bejegyzes::with('tevekenyseg')->where('osztalyId', $osztalyId)->get();     


        return $bejegyzesek;
    }

     //uj bejegyzesek felvitele
     public function store(Request $request)
     {       
         $bejegyzes = new Bejegyzes();
         $bejegyzes->allapot = 0; //az alap érték 0, ha OK akkor 1
         $bejegyzes->tevekenysegId = $request->tevekenysegId;
         $bejegyzes->osztalyId = $request->osztalyId;
         $bejegyzes->save();
         return Bejegyzes::find($bejegyzes->id);
     }

}
