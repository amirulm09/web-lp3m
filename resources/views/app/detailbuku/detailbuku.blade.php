@extends('layouts.app')
@section('title', 'detailbuku')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center"> detail Data Prodi Buku Ajar </div>
                    <div class="panel-body">
                        <div class="com-md-12">
                            <div class="panel panel-success">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Detail Data Prodi</div>


                                <!-- Table -->
                                <table class="table">
                                    <thead class="panel panel-warning">
                                        <tr>
                                            <th scope="col"> No </th>
                                            <th scope="col"> Nama Prodi </th>
                                            <th scope="col"> Judul Buku </th>
                                            <th scope="col"> Nama Penerbit </th>
                                            {{-- <th scope="col"> Kota Penerbit </th> --}}
                                            {{-- <th scope="col"> Jumlah Halaman </th> --}}
                                            <th scope="col"> Tahun </th>
                                            <th scope="col"> Dosen </th>
                                            {{-- <th scope="col"> Fakultas</th> --}}
                                            <th scope="col" colspan="2"> Aksi </th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $d['nama_prodi'] }} </td>
                                            <td> {{ $d['judul_buku'] }} </td>
                                            <td> {{ $d['nama_penerbit_buku'] }} </td>
                                            {{-- <td> {{ $d['kota_penerbit'] }} </td> --}}
                                            {{-- <td> {{ $d['jumlah_halaman'] }} </td> --}}
                                            <td> {{ $d['tahun_terbit_buku'] }} </td>
                                            <td> {{ $d['nama_dosen'] }} </td>
                                            {{-- <td> {{ $d['nama_fakultas'] }} </td> --}}
                                            <td>
                                                <a href="{{ route('home') }}"><img
                                                        src="{{ asset('assets/img/download.svg') }}" alt="">
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
