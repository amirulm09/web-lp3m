<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PenelitianController extends Controller
{
    public function viewPenelitian(Request $request)
    {
        // ==========> Chart <===============
        $responsechart1 = Http::get('https://node1.tirtapijar.com/penelitian');
        // dd(json_decode($responsechart1));

        $penelitian = json_decode($responsechart1, true)['result'];
        $tahun = [];
        foreach ($penelitian as $p) {
            if ($p['tahun_pelaksanaan'] !== null) {
                array_push($tahun, (int) $p['tahun_pelaksanaan']);
            }
        }
        // dd($tahun);
        // ============> Fakultas dan Prodi <================
        $responsepenelitian = Http::get('https://node1.tirtapijar.com/penelitian/jumlah/semua/fakultas');
        // $responsepenelitian = Http::get('http://127.0.0.1:3000/penelitian');
        // dd(json_decode($responsepenelitian, true));
        $fakultas = json_decode($responsepenelitian, true)['result'];
        $data4 = [];
        foreach ($fakultas as $f) {
            $prodipenelitian = Http::get('https://node1.tirtapijar.com/penelitian/jumlah/semua/prodi/' . $f['nama_fakultas']);
            array_push($data4, [$f['nama_fakultas'] => json_decode($prodipenelitian, true)['result']]);
        }

        // dd($fakultas);
        return view('app.penelitian', [
            'data4' => $data4,
            'chart7' => array_count_values($tahun)
        ]);
    }

        public function cari(Request $request)
        {
            // dd($request->all());
            // $prodi = 'Informatika';
            // $tahun = '2020';
            $json = http::get('https://node1.tirtapijar.com/penelitian/pencarian/semua/' .$request->prodipenelitian.'/'.$request->tahun);
            // $json = http::get('http://localhost:8080/penelitian/pencarian/semua/Informatika/2020');
            // dd(json_decode($json,true));
            $responsepenelitian = json_decode($json, true);

            if ($json->ok() && $json->successful()) {
                $data = $responsepenelitian['result'];

            }else {
                $data =[
                    'message' => $responsepenelitian['message']
                ];

            }
            // dd($responsepenelitian);
            return view('app.detailpenelitian.detailpencarianpenelitian', compact('data'));

        }
    // public function cari(Request $request)
    // {
    //     $json = Http::get('http://localhost:8080/pengabdian/pencarian/semua/' .$request->prodi.'/'.$request->tahun);
    //     // dd(json_decode($response, true));
    //     $response = json_decode($json, true);
    //     if ($json->ok() && $json->successful()) {
    //         $data = $response['result'];
    //     }else {
    //         $data = [
    //             'message' => $response['message']
    //         ];
    //     }
    //     // dd($data);
    //     return view('app.detailpengabdian.detailpencarianpengabdian', compact('data'));
    // }
}
