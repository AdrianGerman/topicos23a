<html lang="es">
@include('layouts.clients.layout')


<body class="clickup-chrome-ext_installed">
  @include('layouts.clients.menu')
  <div class="main-content">
    <!-- Top navbar -->
    @include('layouts.clients.navbar')
    <!-- Formulario -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="card-header card-header-primary">
                <h1 class="card-title">Clientes</h1>
                <p class="card-category">Ingresa tus datos</p>
              </div>
              <form method="post" action="{{ route('cliente.save') }}" autocomplete="off">
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

                    <div class="row{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                      <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                      <div class="col-sm-7">
                        <input type="text" name="telefono"
                          class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                          placeholder="{{ __('Telefono') }}">
                        @include('alerts.feedback', ['field' => 'telefono'])
                      </div>
                    </div>
                    <br>

                    <div class="row{{ $errors->has('direccion') ? ' has-danger' : '' }}">
                      <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                      <div class="col-sm-7">
                        <input type="text" name="direccion"
                          class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}"
                          placeholder="{{ __('Dirección') }}">
                        @include('alerts.feedback', ['field' => 'direccion'])
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
              </form>
              <a href="{{ route('clients') }}">
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
