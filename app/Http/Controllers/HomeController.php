<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    public function viewHome(Request $request)
    {
        $response = Http::get('https://node1.tirtapijar.com/penelitian');
        // dd(json_decode($response, true)['update']['harian']);
        $res_penelitian = json_decode($response, true)['result'];
        $tahunpen = [];
        foreach ($res_penelitian as $p) {
            if($p['tahun_pelaksanaan'] !== null){
                array_push($tahunpen,(int) $p['tahun_pelaksanaan']);
            }
        }
        // ==========> Chart <===============
         $responsecharthome = Http::get('https://node1.tirtapijar.com/pengabdian');
        // dd(json_decode($responsecharthome));
         $pengabdianhome = json_decode($responsecharthome, true)['result'];
         $tahun = [];
            foreach ($pengabdianhome as $p) {
             if ($p['tahun_pelaksanaan_pengabdian'] !== null) {
         array_push($tahun, (int) $p['tahun_pelaksanaan_pengabdian']);
        //  dd($pengabdianhome);
     }
 }
        $jumlahf = http::get('https://node1.tirtapijar.com/penelitian/jumlah/semua/fakultas');
        // dd(json_decode($jumlahf));
        $fakultas = json_decode($jumlahf, true)['result'];
        // dd($fakultas);
        $hasil = array();
        foreach ($fakultas as $f) {

            $jumlah_fakul = array();
            $jumlah_fakul['nama_fakultas'] = $f['nama_fakultas'];
            $jumlah_fakul['total'] = $f['total'];
            // if ($f['nama_fakultas'] !== null) {
            //     array_push($jf, (int) $f['nama_fakultas']);
            //     // dd($fakultas);
            array_push($hasil, $jumlah_fakul);
        }
        return view('app.home', [
            'penelitian' => array_count_values($tahunpen),
            'chart5' => array_count_values($tahun),
            // 'jumlahfakultas' => array_count_values($hasil),
            'fakultas'=> $hasil
        ]);

    }
}
