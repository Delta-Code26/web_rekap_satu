<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>Laravel</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">

        <!-- Google Font -->
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
        <link href="{{ asset('icofont/icofont.min.css') }}" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('vendors/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body class="antialiased">
        <div
            class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="row mt-3">
                <div class="col">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3> Jadwal Kuliah </h3>
                            <p class='text-light'> Jadwal Kuliah </p>
                        </div>
                        <i class="icon fas fa-clipboard-list"></i>
                    </div>
                </div>
                <div class="col">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3> Jadwal Kuliah </h3>
                            <p class='text-light'> Jadwal Kuliah </p>
                        </div>
                        <i class="icon fas fa-clipboard-list"></i>
                    </div>
                </div>
                <div class="col">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3> Jadwal Kuliah </h3>
                            <p class='text-light'> Jadwal Kuliah </p>
                        </div>
                        <i class="icon fas fa-clipboard-list"></i>
                    </div>
                </div>

                <div class="col">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3> Semester </h3>
                            <p class='text-light'> semester </p>
                        </div>
                        <i class="icon fas fa-bookmark"></i>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
