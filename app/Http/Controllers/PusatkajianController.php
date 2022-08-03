<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PusatkajianController extends Controller
{
    public function viewSmart(Request $request)
    {
        return view('app.pusatkajian.smart');
    }

    public function viewGame(Request $request)
    {
        return view('app.pusatkajian.game');
    }
    public function viewKomuniti(Request $request)
    {
        return view('app.pusatkajian.komuniti');
    }
}
