<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murids;

class ubahmurid extends Controller
{
    function index( $idmurid)
    {
        $murids = murids::find($idmurid);
        return view('ubahmurid', ['murids' => $murids]);
    }

    function update(Request $request, $idmurid)
    {
        $murids = murids::find($idmurid);
        $murids->namamurid = $request->namamurid;
        $murids->tarikhlahir = $request->tarikhlahir;
        $murids->jantina = $request->jantina;
        $murids->kelas = $request->kelas;
        $murids->alamat = $request->alamat;
        $murids->status = $request->status;
        $murids->save();
        return redirect('/senaraimurid');
    }
}