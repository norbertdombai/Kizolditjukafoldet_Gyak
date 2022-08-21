<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//*****tevekenyseg model beinclude********
use App\Models\Tevekenyseg;

class TevekenysegController extends Controller
{
    //ossz tevekenyseg
    public function index()
    {
        $tevekenysegek = response()->json(Tevekenyseg::all());
        return $tevekenysegek;
    }

}
