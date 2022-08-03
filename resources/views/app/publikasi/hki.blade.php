@extends('layouts.app')
@section('title', 'hki')
@section('content')
    <br>
    <div class="container" style="margin-topcd: 50px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Data HKI Universitas Nurul Jadid</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Grafik Jumlah HKI</div>
                                    <div class="panel-body">
                                        <canvas id="myChart" style="width: 404px; height: 269px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            {{-- =====================> Pencarian <================= --}}
                            <div class="reg-items">
                                <div class="col-md-12">
                                    <form action="{{ route('detailpencarianhki') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select id="clickMeEnable" name="prodi">
                                                        @foreach ($data as $d)
                                                            @foreach ($d as $prodi)
                                                                @foreach ($prodi as $p)
                                                                    <option value="{{ $p['nama_prodi'] }}">
                                                                        {{ $p['nama_prodi'] }}</option>
                                                                @endforeach
                                                            @endforeach
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select id="clickMeDisable" name="tahun">

                                                        @foreach (array_keys($chart2) as $tahun)
                                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit"
                                                    class="btn btn-default btn-block btn-lgcd">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            {{-- ====================> list group <================= --}}
                            <div class="col-md-12">
                                <div class="panel-group" id="accordion">
                                    @foreach ($data as $key => $d)
                                        <div
                                            class="panel @if ($key == 0) panel-primary
                                               @elseif($key == 1) panel-danger
                                               @elseif($key == 2) panel-success
                                               @elseif($key == 3) panel-warning @endif">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse{{ $key }}">{{ key($d) }}</a>
                                                </h4>
                                            </div>
                                            <div id="collapse{{ $key }}" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <ul class="list-group">
                                                        {{-- @dd($d) --}}
                                                        @foreach ($d as $prodi)
                                                            @foreach ($prodi as $p)
                                                                <li class="list-group-item">
                                                                    <span
                                                                        class="badge">{{ number_format($p['total']) }}</span>
                                                                    <a href="{{ route('detailhki', $p['nama_prodi']) }}">
                                                                        {{ $p['nama_prodi'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- ================> List grup 2 <================= --}}
                            {{-- @foreach ($data as $key => $d)
                       <div class="col-md-4">
                           <div class="panel @if ($key == 0) panel-primary
                           @elseif($key == 1) panel-danger
                           @elseif($key == 2) panel-success
                           @elseif($key == 3) panel-warning @endif"
                               style="color:dark">
                               <div class="panel-heading fakultasHeading" style="background-color: rgb({{ rand($key, 180) }}, {{ $key * rand($key, 200) }}, {{ rand($key, 482) }});"> --}}
                            {{-- {{ key($d) }}
                               </div>
                               <div class="panel-body">
                                   <ul class="list-group">

                                       @foreach ($d as $prodi)
                                           @foreach ($prodi as $p)
                                               <li class="list-group-item">
                                                   <span class="badge">{{ number_format($p['total']) }}</span>
                                                   <a href="{{ route('detail', $p['nama_prodi']) }}">
                                                       {{ $p['nama_prodi'] }}</a>
                                               </li>
                                           @endforeach
                                       @endforeach
                                   </ul>
                               </div>
                           </div>
                       </div>
                   @endforeach --}}
                            {{-- <div class="col-md-4">
                       <div class="panel panel-success">
                           <div class="panel-heading">Fakultas Fai</div>
                           <div class="panel-body">
                               <ul class="list-group">
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="panel panel-warning">
                           <div class="panel-heading">Fakultas Kesehatan</div>
                           <div class="panel-body">
                               <ul class="list-group">
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/chart/chart.js') }}"></script>
    <script>
        const tahun = {!! json_encode($chart2) !!}
        // console.log(Object.values(tahun));
        const data = {
            labels: Object.keys(tahun),
            datasets: [{
                label: 'Data HKI',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: Object.values(tahun),
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                maintainAspectRatio: false
            }

        };
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endpush
