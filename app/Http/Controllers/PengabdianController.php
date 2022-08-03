<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Foreach_;

class PengabdianController extends Controller
{
    public function viewPengabdian(Request $request)
    {
        // ==========> Chart <===============
        $responsechart = Http::get('https://node1.tirtapijar.com/pengabdian');
        // dd(json_decode($responsechart));

        $pengabdian = json_decode($responsechart, true)['result'];
        $tahun = [];

        foreach ($pengabdian as $p) {
            if ($p['tahun_pelaksanaan_pengabdian'] !== null) {
                array_push($tahun, (int) $p['tahun_pelaksanaan_pengabdian']);
            }
        }
        // dd($tahun);
        // ============> Fakultas dan Prodi <================
        $response = Http::get('https://node1.tirtapijar.com/pengabdian/jumlah/semua/fakultas');
        // $response = Http::get('http://127.0.0.1:3000/penelitian');
        // dd(json_decode($response, true));
        $fakultas = json_decode($response, true)['result'];
        $data = [];
        foreach ($fakultas as $f) {
            $prodi = Http::get('https://node1.tirtapijar.com/pengabdian/jumlah/semua/prodi/' . $f['nama_fakultas']);
            array_push($data, [$f['nama_fakultas'] => json_decode($prodi, true)['result']]);
            // dd(json_decode($prodi, true));
        }

        // dd($chart);
        return view('app.pengabdian', [
            'data' => $data,
            'chart2' => array_count_values($tahun)
        ]);
    }

    // ==================> Pencariaan<================
    public function cari(Request $request)
    {
        $json = Http::get('https://node1.tirtapijar.com/pengabdian/pencarian/semua/' .$request->prodi.'/'.$request->tahun);
        // dd(json_decode($json, true));
        $response = json_decode($json, true);
        if ($json->ok() && $json->successful()) {
            $data = $response['result'];
        }else {
            $data = [
                'message' => $response['message']
            ];
        }
        // dd($data);
        return view('app.detailpengabdian.detailpencarianpengabdian', compact('data'));
    }
}
