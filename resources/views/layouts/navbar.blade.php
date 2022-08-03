<!-- Header
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container-fluid ">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    {{-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> --}}
                    <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="home">
                    <img src="{{ asset('assets/img/dpm.jpg') }}" class="logo" alt="Logo" style="height: 50px">
                </a>

            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="text">
                        <a href="{{ route('home') }}" class="text" data-toggle="text">Home</a>

                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown"> Profil </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('tentang') }}">Tentang LP3M</a></li>
                            <li><a href="{{ route('Struktur') }}">Struktur dan Organisai</a></li>
                            <li><a href="{{ route('arah') }}">Arah Pengembangan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Pusat Kajian</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('smart') }}"> Smart Computing </a></li>
                            <li><a href="{{ route('game') }}">Game Programming </a></li>
                            <li><a href="{{ route('komuniti') }}">Community Of Critikal Social Research </a></li>
                        </ul>
                    </li>
                    <li class="text">
                        <a href="{{ route('penelitian') }}" class="text" data-toggle="text"> Penelitian </a>

                    </li>
                    <li class="text">
                        <a href="{{ route('pengabdian') }}" class="text" data-toggle="text"> Pengabdian
                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Publikasi</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('jurnal') }}">Prosiding</a></li>
                            <li><a href="{{ route('buku') }}">Buku ajar</a></li>
                            <li><a href="{{ route('forum') }}">Forum ilmiah</a></li>
                            <li><a href="{{ route('hki') }}">HKI</a></li>
                            <li><a href="{{ route('kerja') }}">Kerjasama</a></li>
                            <li><a href="{{ route('lainlain') }}">Lain Lain</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{ route('berita') }}">Berita</a>

                    </li>
                    <li>
                        <a href="{{ route('weekly') }}">Weekly Forum</a>
                    </li>
                    <li>
                        <a href="{{ route('pengumuman') }}">Pengumuman</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <div class="widget">
                <h4 class="title">Users Pages</h4>
                <div class="profile-thumb">
                    <img src="{{ asset('assets/img/800x800.png') }}" alt="Profile">
                </div>
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Recent Order</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
            <div class="widget">
                <h4 class="title">Additional Links</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Rating</a></li>
                    <li><a href="#">Popular Courses</a></li>
                </ul>
            </div>
            <div class="widget social">
                <h4 class="title">Connect With Us</h4>
                <ul class="link">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->
