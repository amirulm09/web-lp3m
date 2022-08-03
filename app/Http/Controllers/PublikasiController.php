<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Foreach_;

class PublikasiController extends Controller
{
    public function viewJurnal(Request $request)
    {
       // ==========> Chart <===============
       $responsechart = Http::get('https://node1.tirtapijar.com/prosiding');
    //    dd(json_decode($responsechart));

       $prosiding = json_decode($responsechart, true)['result'];
       $tahun = [];

       foreach ($prosiding as $p) {
           if ($p['tahun_pelaksanaan_prosiding'] !== null) {
               array_push($tahun, (int) $p['tahun_pelaksanaan_prosiding']);
           }
       }
       // dd($tahun);
       // ============> Fakultas dan Prodi <================
       $response = Http::get('https://node1.tirtapijar.com/prosiding/jumlah/semua/fakultas');
       // $response = Http::get('http://127.0.0.1:3000/penelitian');
    //    dd(json_decode($response, true));
       $fakultas = json_decode($response, true)['result'];
       $data = [];
       foreach ($fakultas as $f) {
           $prodi = Http::get('https://node1.tirtapijar.com/prosiding/jumlah/semua/prodi/' . $f['nama_fakultas']);
        //    dd(json_decode($prodi,true));
           array_push($data, [$f['nama_fakultas'] => json_decode($prodi, true)['result']]);
        //    dd(json_decode($prodi, true));
       }

       // dd($chart);
       return view('app.publikasi.jurnal', [
           'data' => $data,
           'chart2' => array_count_values($tahun)
       ]);
   }

   public function detailJurnal(Request $request, $prodi){
    $response = Http::get('https://node1.tirtapijar.com/prosiding/pencarian/prodi/'. $prodi);
    // dd(json_decode($response,true));
        return view('app.detailprosiding.detailprosiding', [
            'data' => json_decode($response, true)['result'],
        ]);
   }

   // ==================> Pencariaan<================
   public function cari(Request $request)
   {
       $json = Http::get('https://node1.tirtapijar.com/pengabdian/pencarian/semua/' .$request->prodi.'/'.$request->tahun);
    //    dd(json_decode($json, true));
       $response = json_decode($json, true);

       if ($json->ok() && $json->successful()) {
           $data = $response['result'];
       }else {
           $data = [
               'message' => $response['message']
           ];
       }
       // dd($data);
       return view('app.detailprosiding.detailpencarianprosiding', compact('data'));
    }


    public function viewBuku(Request $request)
    {
          // ==========> Chart <===============
       $responsechart = Http::get('https://node1.tirtapijar.com/buku_ajar_atau_buku');
        //   dd(json_decode($responsechart));

          $hki = json_decode($responsechart, true)['result'];
          $tahun = [];

          foreach ($hki as $p) {
              if ($p['tahun_terbit_buku'] !== null) {
                  array_push($tahun, (int) $p['tahun_terbit_buku']);
              }
          }
          // dd($tahun);
          // ============> Fakultas dan Prodi <================
          $response = Http::get('https://node1.tirtapijar.com/buku_ajar_atau_buku/jumlah/semua/fakultas');
          // $response = Http::get('http://127.0.0.1:3000/penelitian');
        //   dd(json_decode($response, true));
          $fakultas = json_decode($response, true)['result'];
          $data = [];
          foreach ($fakultas as $f) {
              $prodi = Http::get('https://node1.tirtapijar.com/buku_ajar_atau_buku/jumlah/semua/prodi/' . $f['nama_fakultas']);
            //   dd(json_decode($prodi,true));
              array_push($data, [$f['nama_fakultas'] => json_decode($prodi, true)['result']]);
           //    dd(json_decode($prodi, true));
          }

          // dd($chart);
          return view('app.publikasi.buku', [
              'data' => $data,
              'chart2' => array_count_values($tahun)
          ]);
      }

      public function DetailBuku(Request $request, $prodi){
        $response = Http::get('https://node1.tirtapijar.com/buku_ajar_atau_buku/pencarian/prodi/'. $prodi);
        // dd(json_decode($response,true));
            return view('app.detailbuku.detailbuku', [
                'data' => json_decode($response, true)['result'],
            ]);
       }


      // ==================> Pencariaan<================
      public function cari1(Request $request)
      {
          $json = Http::get('https://node1.tirtapijar.com/buku_ajar_atau_buku/pencarian/semua/' .$request->prodi.'/'.$request->tahun);
        //   dd(json_decode($json, true));
          $response = json_decode($json, true);

          if ($json->ok() && $json->successful()) {
              $data = $response['result'];
          }else {
              $data = [
                  'message' => $response['message']
              ];
          }
          // dd($data);
          return view('app.detailbuku.detailpencarianbuku', compact('data'));

    }
    public function viewForum(Request $request)
    {
        return view('app.publikasi.forum');
    }
    public function viewHki(Request $request)
    {
   // ==========> Chart <===============
   $responsechart = Http::get('https://node1.tirtapijar.com/kekayaan_intelektual');
    //  dd(json_decode($responsechart));

     $hki = json_decode($responsechart, true)['result'];
     $tahun = [];

     foreach ($hki as $p) {
         if ($p['tahun_pelaksanaan'] !== null) {
             array_push($tahun, (int) $p['tahun_pelaksanaan']);
         }
     }
     // dd($tahun);
     // ============> Fakultas dan Prodi <================
     $response = Http::get('https://node1.tirtapijar.com/kekayaan_intelektual/jumlah/semua/fakultas');
     // $response = Http::get('http://127.0.0.1:3000/penelitian');
    //  dd(json_decode($response, true));
     $fakultas = json_decode($response, true)['result'];
     $data = [];
     foreach ($fakultas as $f) {
         $prodi = Http::get('https://node1.tirtapijar.com/kekayaan_intelektual/jumlah/semua/prodi/' . $f['nama_fakultas']);
        //  dd(json_decode($prodi,true));
         array_push($data, [$f['nama_fakultas'] => json_decode($prodi, true)['result']]);
      //    dd(json_decode($prodi, true));
     }

     // dd($chart);
     return view('app.publikasi.hki', [
         'data' => $data,
         'chart2' => array_count_values($tahun)
     ]);
 }

 public function DetailHki(Request $request, $prodi){
    $response = Http::get('https://node1.tirtapijar.com/kekayaan_intelektual/pencarian/prodi/'. $prodi);
    // dd(json_decode($response,true));
        return view('app.detailhki.detailhki', [
            'data' => json_decode($response, true)['result'],
        ]);
   }

 // ==================> Pencariaan<================
 public function cari2(Request $request)
 {
     $json = Http::get('https://node1.tirtapijar.com/kekayaan_intelektual/pencarian/semua/' .$request->prodi.'/'.$request->tahun);
    //  dd(json_decode($json, true));
     $response = json_decode($json, true);

     if ($json->ok() && $json->successful()) {
         $data = $response['result'];
     }else {
         $data = [
             'message' => $response['message']
         ];
     }
     // dd($data);
     return view('app.detailhki.detailpencarianhki', compact('data'));
    }

    public function viewKerja(Request $request)
    {
        return view('app.publikasi.kerja');
    }
    public function viewLainlain(Request $request)
    {
        return view('app.publikasi.lainlain');
    }

}
