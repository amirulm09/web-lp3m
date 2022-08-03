<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailController extends Controller
{
    public function viewDetail (Request $request, $prodi)
    {
        $response = Http::get('https://node1.tirtapijar.com/pengabdian/pencarian/prodi/'. $prodi);
        return view('app.detailpengabdian.detail', [
            'data' => json_decode($response, true)['result'],
        ]);
    }
}
