<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sewa Mobil | Register</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('template_admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template_admin') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <span class="h1">Pinjam Mobil</span>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new account</p>

                <form action="/register/insert" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <input type="text" name="nama" class="form-control" placeholder="Full name"
                            value="{{ old('nama') }}">
                        @error('nama')
                            <p class="tex text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-solid fa-house"></i>
                            </div>
                        </div>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                            value="{{ old('alamat') }}">
                        @error('alamat')
                            <p class="tex text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <input type="number" name="no_hp" class="form-control" placeholder="No HP"
                            value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <p class="tex text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-solid fa-credit-card"></i>
                            </div>
                        </div>
                        <input type="number" name="no_sim" class="form-control" placeholder="No SIM"
                            value="{{ old('no_sim') }}">
                        @error('no_sim')
                            <p class="tex text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="social-auth-links text-center">
                        <button type="submit" class="btn btn-block btn-primary">Register</button>
                    </div>
                </form>

                <a href="/login" class="text-center">I have account</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('template_admin') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template_admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template_admin') }}/dist/js/adminlte.min.js"></script>
</body>

</html>
