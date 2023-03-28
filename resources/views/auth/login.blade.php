<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SKRIPSI - Login Karyawan</title>

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css" />

    <!-- Google Fonts Link -->
    @googlefonts

    <!-- Material Icons Google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('css')
</head>

<body class="bg-white d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (\Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span>{!! \Session::get('error') !!}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card my-5 shadow-lg">
                    <form class="card-body cardbody-color p-lg-5" action="{{ route('user.post.login') }}" method="POST">
                        @csrf
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/images/Login.png') }}" class="img-fluid w-25" alt=" profile">
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Nomor Induk Pegawai</label>
                            </div>
                            <input type="text" class="form-control" id="nip" name="nip" aria-describedby="emailHelp"
                                placeholder="Nomor Induk Pegawai">
                        </div>
                        <div class="mb-3">
                            <div class="form-password-toggle mb-3">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="form-password-toggle mb-3">
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control input" name="password"
                                            autocomplete="off"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text bg-white cursor-pointer"
                                            onclick="password_show_hide();">
                                            <i class="fas fa-eye-slash" id="show_eye"></i>
                                            <i class="fas fa-eye d-none" id="hide_eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-success px-5 mb-5 w-100">Login</button>
                        </div>
                        {{-- <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
                            Registered? <a href="#" class="text-dark fw-bold"> Create an
                                Account</a>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("hide_eye");
            var hide_eye = document.getElementById("show_eye");
            show_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            } else {
                x.type = "password";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            }
        }
    </script>
</body>

</html>