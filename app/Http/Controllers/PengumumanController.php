<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function viewPengumuman(Request $request)
    {
        return view('app.pengumuman');
    }
}
