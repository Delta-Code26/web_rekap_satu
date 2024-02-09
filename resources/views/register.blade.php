<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
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
        <title>Login</title>
        <!-- Tambahkan link ke file CSS atau Bootstrap jika diperlukan -->

    </head>

    <body class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg p-4">
                        <h2 class="text-center mb-4">Register</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-Mail</label>
                                <input type="text" class="form-control" name="email"
                                    placeholder="delta.private26@gmail.com">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="************">
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Password Confirmation</label>
                                <input type="password" id="confirm_password" class="form-control"
                                    name="confirm_password" placeholder="************">
                            </div>

                            <div class="d-grid mb-4">
                                <button class="btn btn-primary" name='submit' type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
