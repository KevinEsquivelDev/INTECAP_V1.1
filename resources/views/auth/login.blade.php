<!DOCTYPE html>
<html lang="en">
    <head>
        <title>INTECAP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{!! asset('images/icons/favicon.ico') !!}"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{!! asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
        <!--===============================================================================================-->
        <link rel="stylesheet"  href="{!! asset('css/util.css') !!}">
        <link rel="stylesheet"  href="{!! asset('css/main.css') !!}">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--===============================================================================================-->

    </head>
    <body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/logo_intecap.png" alt="IMG">
                </div>

                <!-- EL LOGIN EMPIEZA A ACÁ-->

                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <center>
                        <img src="images/bandera.png" width="75" height="75">
                    </center>

                    <span class="login100-form-title">
                        Bienvenido
                    </span>

                        <!-- EMAIL-->
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus placeholder="abc@gmail.com">

                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>

                        </div>

                        <!-- PASSWORD-->
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                {{ __('Login') }}
                            </button>
                                @if (Route::has('password.request'))
                                    <div class="text-center p-t-12">
                                        <span class="txt1">
                                            Forgot
                                        </span>
                                        <a class="txt2" href="{{ route('password.request') }}">
                                            Username / Password?
                                        </a>
                                    </div>
                                @endif
                        </div>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ route('register') }}">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Errores-->

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>
            <script>
                Swal.fire({
                    title: '¡Error!',
                    text: 'Usuario o contraseña no valido',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                })
            </script>
        </strong>
    </span>
    @enderror
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>
            <script>
                Swal.fire({
                    title: '¡Error!',
                    text: 'Usuario o contraseña no valido',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                })
            </script>
        </strong>
    </span>
    @enderror



    <!--===============================================================================================-->
    <script src="{!! asset('vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('vendor/select2/select2.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('vendor/tilt/tilt.jquery.min.js') !!}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>



    </body>
</html>



