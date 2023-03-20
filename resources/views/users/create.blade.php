<html lang="es">
@include('layouts.users.layout')

<body class="clickup-chrome-ext_installed">
@include('layouts.users.menu')

<div class="main-content">
    <!-- Top navbar -->
    @include('layouts.users.navbar')

    <!-- Formulario -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="card-header card-header-primary">
                            <h1 class="card-title">Usuarios</h1>
                            <p class="card-category">Ingresa tus datos</p>
                        </div>
                        <form method="post" action="{{ route('user.save') }}" autocomplete="off">
                            <div class="row align-items-center">
                                <div class="card-body">
                                    @csrf

                                    <div class="row{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="name"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   placeholder="{{ __('Nombre') }}">
                                            @include('alerts.feedback', ['field' => 'name'])
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label for="email" class="col-sm-2 col-form-label">Correo
                                            electrónico</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   placeholder="{{ __('Correo electrónico') }}">
                                            @include('alerts.feedback', ['field' => 'email'])
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="password"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   placeholder="{{ __('Contraseña') }}">
                                            @include('alerts.feedback', ['field' => 'password'])
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label for="password" class="col-sm-2 col-form-label">Confirmar
                                            contraseña</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="password_confirmation"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   placeholder="{{ __('Confirmar contraseña') }}">
                                            @include('alerts.feedback', ['field' => 'password'])
                                        </div>
                                    </div>
                                    <br>


                                </div>
                                <div class="card-footer py-4">
                                    <nav class="d-flex justify-content-end" aria-label="...">
                                    </nav>
                                </div>
                            </div>
                    </div>


                    <!--Footer-->
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
                    </div>

                    </form>

                    <div class="ml-auto mr-auto">
                        <a href="{{ route('users') }}">
                            <button class="btn btn-primary">Volver</button>
                        </a>
                    </div>

                    <!--End footer-->
                </div>
                @include('layouts.footers.auth')
            </div>
        </div>


        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>
</html>
