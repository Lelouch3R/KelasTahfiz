<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//pakai model nama user
use App\Models\User;

class senaraipengguna extends Controller
{
    public function index()
    {
// Suggested code may be subject to a license. Learn more: ~LicenseLog:3458590244.
        $users = user::all();
        return view('senaraipengguna', compact('users'));

    }
}
