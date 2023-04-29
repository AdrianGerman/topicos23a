<html lang="es">

@include('layouts.products.layout')

<body class="clickup-chrome-ext_installed">
  @include('layouts.products.menu')
  <div class="main-content">
    <!-- Top navbar -->
    @include('layouts.products.navbar')

    <!-- Formulario -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="card-header card-header-primary">
                <h1 class="card-title">Productos</h1>
                <p class="card-category">Ingresa tus datos</p>
              </div>
              <form method="post" action="{{ route('producto.update', $product->id) }}" autocomplete="off">
                <div class="row align-items-center">
                  <div class="card-body">
                    @csrf
                    @method('PUT')

                    <div class="row{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                      <div class="col-sm-7">
                        <input type="text" name="name"
                          class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                          value="{{ $product->name }}" placeholder="{{ __('Nombre') }}">
                        @include('alerts.feedback', ['field' => 'name'])
                      </div>
                    </div>
                    <br>

                    <div class="row{{ $errors->has('description') ? ' has-danger' : '' }}">
                      <label for="email" class="col-sm-2 col-form-label">Descripción</label>
                      <div class="col-sm-7">
                        <input type="text" name="description"
                          class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                          value="{{ $product->description }}" placeholder="{{ __('Descripción') }}">
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
                    <br>

                    <div class="row{{ $errors->has('stock') ? ' has-danger' : '' }}">
                      <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                      <div class="col-sm-7">
                        <input type="text" name="stock"
                          class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                          value="{{ $product->stock }}" placeholder="{{ __('Stock') }}">
                        @include('alerts.feedback', ['field' => 'stock'])
                      </div>
                    </div>
                    <br>

                    <div class="row{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <label for="price" class="col-sm-2 col-form-label">Precio</label>
                      <div class="col-sm-7">
                        <input type="text" name="price"
                          class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                          value="{{ $product->price }}" placeholder="{{ __('Precio') }}">
                        @include('alerts.feedback', ['field' => 'price'])
                      </div>
                    </div>
                    <br>

                    <div class="row{{ $errors->has('marca') ? ' has-danger' : '' }}">
                      <label for="marca" class="col-sm-2 col-form-label">Marca</label>
                      <div class="col-sm-7">
                        <input type="text" name="marca"
                          class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}"
                          value="{{ $product->marca }}" placeholder="{{ __('Marca') }}">
                        @include('alerts.feedback', ['field' => 'marca'])
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
              <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
              <a href="{{ route('products') }}">
                <button class="btn btn-primary">Volver</button>
              </a>
            </div>
            </form>
            <!--End footer-->
          </div>
        </div>
      </div>
    </div>

    @include('layouts.footers.auth')

  </div>


  <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Argon JS -->
  <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>

</html>
