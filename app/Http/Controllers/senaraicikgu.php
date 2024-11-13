<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//pakai model murid
use App\Models\cikgu;

class senaraicikgu extends Controller
{
    public function index()
    {
        $cikgu = cikgu::all();
        return view('senaraicikgu', compact('cikgu'));
    }
}