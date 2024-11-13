<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//pakai model murid
use App\Models\murids;

class senaraimurid extends Controller
{
    public function index()
    {
        $murids = murids::all();
        return view('senaraimurid', compact('murids'));
    }
}
   
