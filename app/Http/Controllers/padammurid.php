<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murids;

class padammurid extends Controller
{
    function delete( $idmurid)
    {
        $murids = murids::find($idmurid);
        $murids->delete();
        return redirect('/senaraimurid');
    }
}
