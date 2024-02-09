<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Font -->
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    <link href="{{ asset('icofont/icofont.min.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendors/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Sistem Informasi Karyawan</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('layouts.partial.sidebar')
        <!-- Page Content  -->
        <div id="main">
            <!-- Navbar -->
            @include('layouts.partial.navbar')
            <!-- Userinfo -->
            <div class='py-1 px-4 bg-warning text-light fs-5 text-center'>
                <!-- Place for User Info -->
            </div>
            <!-- Content -->
            <div id="content">
                @yield('content')
                <!-- End div content -->
            </div>
            <!-- End div main -->
        </div>
        <!-- End div wrapper -->
    </div>
    <!-- Script JS -->
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script defer src="{{ asset('vendors/jQuery-3.6.0/jQuery.min.js') }}"></script>
    {{-- <script defer src="./vendors/jQuery-3.6.0/jQuery.min.js"></script> --}}
    <!-- Bootstrap Bundle with Popper -->
    <script defer src="{{ asset('vendors/bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script defer src="./vendors/bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- FontAwesome -->
    <script defer src="{{ asset('vendors/fontawesome-free-5.15.3-web/js/all.min.js') }}"></script>
    <script defer src="{{ asset('js/script.js') }}"></script>
    <!-- Script JS -->
    {{-- <script defer src="./assets/js/script.js"></script> --}}


    <!-- Script -->
    <script>
        $(document).ready(function() {
            // Mengaktifkan dropdown menu pada item yang memiliki class "dropdown-toggle"
            $('.dropdown-toggle').click(function() {
                var $submenu = $(this).next('.collapse');
                $('.collapse').not($submenu).collapse('hide');
            });
        });
    </script>
</body>

</html>
