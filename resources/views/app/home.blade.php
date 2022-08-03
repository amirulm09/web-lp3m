@extends('layouts.app')
@section('title', 'home')
@section('content')

    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({{ asset('assets/img/p.jpg') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>LP3M UNUJA</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Advisor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="advisor" class="advisor-area default-padding" style="height: 900px ">
        <div class="container-fluid" style="background-color: rgb(255, 253, 253)">
            <div class="row">
                <div class="col-md-4">
                    <div class="card " style="box-shadow: 1px 1px 1px 1px rgb(192, 192, 192);padding:20px ">
                        <h4 class="card-title">
                            Data Penelitian
                        </h4>
                        <div class="card-body shadow ">
                            <canvas id="myChart" style="display: block; width: 404px; height: 269px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="box-shadow: 1px 1px 1px 1px rgb(192, 192, 192); padding: 20px;">
                        <h4 class="card-title">
                            Data Pengabdian fakultas
                        </h4>
                        <div class="card-body" style="height: 253px;">
                            <canvas id="myChart2" style="padding: 1px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="box-shadow: 1px 1px 1px 1px rgb(192, 192, 192);padding:20px ">
                        <h4 class="card-title">
                            Jurnal
                        </h4>
                        <div class="card-body" style="height: 253px;">
                            <canvas id="myChart3" style="padding: 1px"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6" style="margin-top: 20px">
                    <div class="card" style="box-shadow: 1px 1px 1px 1px rgb(192, 192, 192);padding:20px ">
                        <h4 class="card-title">
                            HKI
                        </h4>
                        <div class="card-body" style="height: 253px;">
                            <canvas id="myChart4" style="padding: 1px"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6" style="margin-top: 20px">
                    <div class="card" style="box-shadow: 1px 1px 1px 1px rgb(192, 192, 192);padding:20px ">
                        <h4 class="card-title">
                            Data Pengabdian
                        </h4>
                        <div class="card-body" style="height: 253px;">
                            <canvas id="myChart5" style="padding: 1px"></canvas>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


    </section>




    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>UNUJA NEWS</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own
                            additions education satisfied the perpetual. If he cause manor happy. Without farther she
                            exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/unuja.jpg" alt="Thumb" style="height: 190px;">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    PROBOLINGGO, KalderaNews.com – Universitas Nurul Jadid (Unuja) Paiton, Probolinggo, Jawa
                                    Timur memperoleh sertifikasi ISO untuk dua kategori sekaligus, yakni ISO 9001:2015 untuk
                                    bidang Sistem Manajemen Mutu, dan ISO 21001:2018 untuk bidang Sistem Manajemen
                                    Organisasi Pendidikan.Hal ini membuat Unuja menjadi kampus pesantren pertama yang meraih

                                    <br>
                                    <a href="{{ route('berita') }}"><span>More Options</span></a>
                                </p>

                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/alquran.jpg" alt="Thumb"style="height: 190px;">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    REPUBLIKA.CO.ID, PROBOLINGGO – Himpunan Mahasiswa Program Studi Ilmu Alquran dan Tafsir
                                    (HIMAPRODI IQT) Universitas Nurul Jadid (UNUJA), Paiton, Probolinggo menyelenggarakan
                                    Kuliah Tafsir Progresif. Kegiatan yang bertempat di Aula Mini UNUJA ini menghadirkan dua
                                    pemateri, yakni Gus Muhammad Al-Fayyadl dan Ahmad Sahid.
                                    <br>
                                    <a href="{{ route('berita') }}"><span>More Options</span></a>
                                </p>

                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->

                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4 info">
                    <h4>Pengumuman</h4>
                    <p>
                        Seeing rather her you not esteem men settle genius excuse. Deal say over you age from.
                        Comparison new ham melancholy son themselves.
                    </p>
                </div>
                <div class="col-md-8 clients">
                    <div class="clients-items owl-carousel owl-theme text-center">
                        <div class="single-item">
                            <a href="#">Nomor:NJ-T06/0486/SK/03.2022</a>
                        </div>
                        <div class="single-item">
                            <a href="#">Nomor:NJ-T06/0486/SK/03.2022</a>
                        </div>
                        <div class="single-item">
                            <a href="#">Nomor:NJ-T06/0486/SK/03.2022</a>
                        </div>
                        <div class="single-item">
                            <a href="#">Nomor:NJ-T06/0486/SK/03.2022</a>
                        </div>
                        <div class="single-item">
                            <a href="#">Nomor:NJ-T06/0486/SK/03.2022</a>
                        </div>
                        <div class="single-item">
                            <a href="#">Nomor:NJ-T06/0486/SK/03.2022</a>
                        </div>
                        <div class="single-item">
                            <a href="#">Nomor:NJ-T06/0486/SK/03.2022</a>
                        </div>
                        <div class="single-item">
                            <a href="#">Nomor:NJ-T06/0486/SK/03.2022</a>
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
        const tahunpen = {!! json_encode($penelitian) !!};

        const data = {
            labels: Object.keys(tahunpen),
            datasets: [{
                label: 'Data Penelitian',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: Object.values(tahunpen),
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}

        };
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );


        const data2 = {
            labels: [
                @foreach ($fakultas as $h)
                    '{{ $h['nama_fakultas'] }}',
                @endforeach
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [
                    @foreach ($fakultas as $h)
                        {{ $h['total'] }},
                    @endforeach
                ],
                backgroundColor: [
                    '#337ab7',
                    '#ebccd1',
                    '#d6e9c6',
                    '#faebcc'
                ],
                hoverOffset: 4
            }]
        };

        const config2 = {
            type: 'doughnut',
            data: data2,
            options: {
                maintainAspectRatio: false
            }
        };
        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config2
        );

        const labels3 = [
            '2002',
            '2003',
            '2004',
            '2005',
            '2006',
            '2007',
            '2008',
            '2009',
            '2010',
            '2011',
            '2012',
            '2013',
            '2014',
        ];

        const data3 = {
            labels: [
                'Teknik',
                'Fai',
                'Stikes',
                'Soshum'
            ],
            datasets: [{
                label: 'Data Jurnal',
                data: [300, 50, 100, 20],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(12, 224, 30)'
                ],
                hoverOffset: 4
            }]
        };

        const config3 = {
            type: 'radar',
            data: data3,
            options: {
                maintainAspectRatio: false
            }
        };
        const myChart3 = new Chart(
            document.getElementById('myChart3'),
            config3
        );

        const labels4 = [
            '2002',
            '2003',
            '2004',
            '2005',
            '2006',
            '2007',
            '2008',
            '2009',
            '2010',
            '2011',
            '2012',
            '2013',
            '2014',
        ];

        const data4 = {
            labels: labels4,
            datasets: [{
                label: 'Data HKI',
                backgroundColor: 'rgb(145, 6, 6)',
                borderColor: 'rgb(194, 197, 28)',
                data: [33, 20, 5, 2, 20, 30, 45, 11, 12, 55, 65, 44, 33],
            }]
        };

        const config4 = {
            type: 'line',
            data: data4,
            options: {}

        };
        const myChart4 = new Chart(
            document.getElementById('myChart4'),
            config4
        );

        const tahun = {!! json_encode($chart5) !!}
        // console.log(Object.values(tahun));

        const data5 = {
            labels: Object.keys(tahun),
            datasets: [{
                label: 'Data Pengabdian',
                backgroundColor: ['rgb(255, 205, 86)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: Object.values(tahun),
            }]
        };

        const config5 = {
            type: 'bar',
            data: data5,
            options: {}

        };
        const myChart5 = new Chart(
            document.getElementById('myChart5'),
            config5
        );
    </script>
@endpush
