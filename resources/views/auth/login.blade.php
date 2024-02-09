<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">

        <!-- Tambahkan link ke file CSS atau Bootstrap jika diperlukan -->
        <!-- Google Font -->
        <link href="{{ asset('icofont/icofont.min.css') }}" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('vendors/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>Aplikasi Rekap Hasil Panen || Login</title>

    </head>

    <body class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg p-5">
                        <h2 class="text-center mb-4">Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="*******">
                            </div>
                            <div class="d-grid mb-4">
                                <button class="btn btn-primary" name='submit' type="submit">Login</button>
                            </div>
                            <a href="{{ route('register') }}">Belum memiliki akun?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Script JS -->
        <script defer src="{{ asset('vendors/jQuery-3.6.0/jQuery.min.js') }}"></script>
        <script defer src="{{ asset('vendors/bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js') }}"></script>

        <!-- FontAwesome -->
        <script defer src="{{ asset('vendors/fontawesome-free-5.15.3-web/js/all.min.js') }}"></script>
        <script defer src="{{ asset('js/script.js') }}"></script>
    </body>

</html>
