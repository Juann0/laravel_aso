<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" type="image/x-icon" href="img/icono.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asojuntas - Inicio de sesion</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <style>
        .login-container {
            display: grid;
            grid-template-columns: 50% 50%;
            height: 100vh;
            width: 100vw;
        }

        .vertical-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-container {
            background-color: #006926;
        }

        .logo-container img {
            max-width: 400px;
        }

        @media (max-width: 575.98px) {
            .login-container {
                grid-template-columns: 100%;
            }

            .logo-container {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo-container vertical-center">
            <img src="{{ asset('img/app/grupo.png') }}" alt="Icono de la aplicación">
        </div>
        <div class=" vertical-center text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <img class="mb-4 w-25" src="{{ asset('img/app/grupo.png') }}">
                            <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>

                            <div class="form-floating mb-2">
                                <input type="email" id="email" class="form-control" name="email" placeholder="Correo electrónico" autocomplete="off" autofocus style="border-radius: 10px;" />
                                <label for="email">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" style="border-radius: 10px;">
                                <label for="floatingPassword">Contraseña</label>
                            </div>

                            @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                            @endif

                            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>

                            <p class="mt-5 mb-3 text-muted">
                                <a id="forgot-password" href="#">¿Ha olvidado su contraseña?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>