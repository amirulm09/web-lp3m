<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ControllerDetailPenelitian extends Controller
{
    public function viewDetailpenelitian (Request $request, $prodi)
    {
        $response = http::get ('https://node1.tirtapijar.com/penelitian/pencarian/prodi/'.$prodi);
        return view('app.detailpenelitian.detailpenelitian', [
            'data' => json_decode($response, true)['result'],

        ]);
    }
}
