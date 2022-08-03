@extends('layouts.app')
@section('title', 'detailpencarianprosiding')
@section('content')
    {{-- @dd(isset($data['message'])) --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center"> Detail Pencarian Prosiding </div>
                    <div class="panel-body">
                        <div class="com-md-12">
                            <div class="panel panel-success">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Detail Pencarian Prosiding Prodi/Tahun</div>

                                <!-- Table -->
                                <table class="table">
                                    <thead class="panel panel-warning">
                                        <tr>
                                            <th scope="col"> No </th>
                                            <th scope="col"> Nama Prodi </th>
                                            <th scope="col"> Nama prosiding </th>
                                            <th scope="col"> Judul Prosiding </th>
                                            <th scope="col"> Jenis Prosiding </th>
                                            <th scope="col"> Tahun </th>
                                            <th scope="col"> Dosen </th>
                                            <th scope="col"> Fakultas</th>
                                            <th scope="col" colspan="2"> Aksi </th>
                                        </tr>
                                    </thead>
                                    @if (isset($data['message']))
                                        <tr>
                                            <td colspan="8">{{ $data['message'] }}</td>
                                        </tr>
                                    @else
                                        @foreach ($data as $d)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $d['nama_prodi'] }} </td>
                                                <td> {{ $d['nama_prosiding'] }} </td>
                                                <td> {{ $d['judul_prosiding'] }} </td>
                                                <td> {{ $d['jenis_prosiding'] }} </td>
                                                <td> {{ $d['tahun_pelaksanaan_prosiding'] }} </td>
                                                <td> {{ $d['nama_dosen'] }} </td>
                                                <td> {{ $d['nama_fakultas'] }} </td>
                                                <td>
                                                    <a href="{{ route('home') }}"><img
                                                            src="{{ asset('assets/img/download.svg') }}" alt="">
                                                    </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
