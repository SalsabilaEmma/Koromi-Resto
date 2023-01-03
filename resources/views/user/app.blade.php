<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Koromi Resto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    {{-- <link href="{{ url('') }}/img/logo.png" rel="icon"> --}}
    <link rel='shortcut icon' type='image/x-icon' href='{{ url('img') }}/logo.png' />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ url('user') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ url('user') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('user') }}/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="{{ url('user') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="{{ url('user') }}/css/style.css" rel="stylesheet">
    @section('css')
    @show
</head>

<body>

    {{-- header --}}
    @include('user.header')

    {{-- page content --}}
    @yield('content')

    {{-- footer --}}
    @include('user.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('user') }}/lib/easing/easing.min.js"></script>
    <script src="{{ url('user') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ url('user') }}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ url('user') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ url('user') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url('user') }}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ url('user') }}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ url('user') }}/js/main.js"></script>
</body>

</html>
