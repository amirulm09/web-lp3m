<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function viewTentang(Request $request)
    {
        return view('app.profil.tentang');
    }
    public function viewStruktur(Request $request)
    {
        return view('app.profil.Struktur');
    }
    public function viewArah(Request $request)
    {
        return view('app.profil.arah');
    }

}
