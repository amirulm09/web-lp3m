@extends('layouts.app')
@section('title', 'penelitian')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Data Penelitian Universitas Nurul Jadid</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Grafik Jumlah Penelitian
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="myChart" style="width: 404px; height: 269px;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="reg-items">
                                <div class="col-md-12">
                                    <form action="{{ route('detailpencarianpenelitian') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select id="clickMeEnable" name="prodipenelitian">
                                                        @foreach ($data4 as $d)
                                                            @foreach ($d as $prodipenelitian)
                                                                @foreach ($prodipenelitian as $p)
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

                                                        @foreach (array_keys($chart7) as $tahun)
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

                            <br>
                            <div class="col-md-12">
                                <div class="panel-group" id="accordion">
                                    @foreach ($data4 as $key => $d)
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
                                                        @foreach ($d as $prodipenelitian)
                                                            @foreach ($prodipenelitian as $p)
                                                                <li class="list-group-item">
                                                                    <span
                                                                        class="badge">{{ number_format($p['total']) }}</span>
                                                                    <a
                                                                        href="{{ route('detailpenelitian', $p['nama_prodi']) }}">
                                                                        {{ $p['nama_prodi'] }} </a>
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

                            {{-- @foreach ($data4 as $key => $d)
                                <div class="col-md-4">
                                    <div
                                        class="panel  @if ($key == 0) panel-primary
                                                        @elseif($key == 1) panel-danger
                                                        @elseif($key == 2) panel-success
                                                         @elseif($key == 3) panel-warning @endif">

                                        <div class="panel-heading fakultasHeading"> --}}
                            {{-- style="background-color: rgb({{ rand($key, 180) }}, {{ $key * rand($key, 200) }}, {{ rand($key, 482) }});"> --}}
                            {{-- {{ key($d) }}
                                        </div>
                                        <div class="panel-body">
                                            <ul class="list-group">

                                                @foreach ($d as $prodipenelitian)
                                                    @foreach ($prodipenelitian as $p)
                                                        <li class="list-group-item">
                                                            <span class="badge">{{ number_format($p['total']) }}</span>
                                                            <a href="{{ route('detailpenelitian', $p['nama_prodi']) }}">
                                                                {{ $p['nama_prodi'] }} </a>
                                                        </li>
                                                    @endforeach
                                                @endforeach --}}
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}

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
        const tahun = {!! json_encode($chart7) !!};
        // console.log(Object, value(tahun));

        const data = {
            labels: Object.keys(tahun),
            datasets: [{
                label: 'Data Penelitian',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: Object.values(tahun),
            }]
        };

        const config = {
            type: 'bar',
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
