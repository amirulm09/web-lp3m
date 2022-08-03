<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">

    <!-- ========== Page Title ========== -->
    <title>@yield('title')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    @include('layouts.style')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->



</head>

<body >
    <div class="se-pre-con"></div>
    @include('layouts.header')
    @include('layouts.navbar')

    @yield('content')
    @include('layouts.footer')

    @include('layouts.script')

</body>

</html>
