<html lang="es">
@include('layouts.providers.layout')

<body class="clickup-chrome-ext_installed">
@include('layouts.providers.menu')

<div class="main-content">

    <!-- Top navbar -->
    @include('layouts.providers.navbar')

    <!-- Formulario -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Proveedores</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $provider->name }}</td>
                                    <td>{{ $provider->email }}</td>
                                    <td>{{ $provider->telefono }}</td>
                                    <td>{{ $provider->direccion }}</td>
                                    <td>{{ $provider->ciudad }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            <div class="ml-auto mr-auto">
                                <a href="{{ route('vendor') }}">
                                    <button class="btn btn-primary">Volver</button>
                                </a>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
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
