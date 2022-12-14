<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website apps for Final Task">
    <meta name="Nadya Zahra" content="website apps for MSMEs">

    <title>HR Apps - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container mt-2">

        <!-- Outer Row -->
        <div class="row justify-content-center">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h3 text-gray-900"><b>Welcome!</h1>
                                    <h6 class="h6 text-gray-900">Aplikasi Manajemen untuk UMKM Indonesia</h6>
                                </div>
                                <form class="user" action="/login" method="post">
                                    @csrf

                                    <hr>
                                    <h2 class="h6 text-gray-900 text-center mb-3">Silahkan Login</h2>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="email" autofocus required aria-describedby="emailHelp"
                                            placeholder="Masukkan Email...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" required placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="{{ route('confirm.index') }}" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>
                                    <hr>

                                </form>
                                
                                <div class="text-center small">
                                    Registrasi akun dapat menghubungi pihak <a href="{{ url('/cobaCC') }}">Call Center</a>.
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

</body>

</html>