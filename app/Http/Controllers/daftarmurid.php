<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murids;

class daftarmurid extends Controller
{

    public function index()
    {
        return view('borangmurid');
    }

    public function store(request $request)
    {
        $murid = new murids;
        $murid->idmurid = $murid->idmurid = rand(1,1000);
        $murid->namamurid = $request->namamurid;
        $murid->tarikhlahir = $request->tarikhlahir;
        $murid->jantina = $request->jantina;
        $murid->kelas = $request->kelas;
        $murid->alamat = $request->alamat;
        $murid->status = "Aktif";
        $murid->save();
        return redirect('/senaraimurid');
    }
}


