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
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Productos</h3>
                </div>
                <div class="col-4 text-right text-white">
                  <a onclick="CreateBtn('create_product');" class="btn btn-sm btn-primary">Agregar productos</a>
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
                    <th scope="col">Descripción</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Marca</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($productos as $producto)
                    <tr>
                      <td>{{ $producto->name }}</td>
                      <td>{{ $producto->description }}</td>
                      <td>{{ $producto->stock }}</td>
                      <td>{{ $producto->price }}</td>
                      <td>{{ $producto->marca }}</td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item"
                              onclick="EditBtn('{{ route('producto.edit', $producto->id) }}');">Editar</a>
                            <a class="dropdown-item"
                              onclick="DeleteBtn('{{ route('producto.delete', ['id' => $producto->id]) }}')">Eliminar</a>
                            <a class="dropdown-item"
                              onclick="DetailBtn('{{ route('producto.show', $producto->id) }}');">Detalles</a>


                          </div>
                        </div>
                      </td>

                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav class="d-flex justify-content-end" aria-label="...">

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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function CreateBtn(url) {
      event.preventDefault();
      Swal.fire({
        title: '¿Quieres crear un nuevo producto?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = url
        }
      })
    }

    function DeleteBtn(url) {
      event.preventDefault();
      Swal.fire({
        title: '¿Quieres eliminar este producto?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = url
        }
      })
    }

    function EditBtn(url) {
      event.preventDefault();
      Swal.fire({
        title: '¿Quieres editar este producto?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = url
        }
      })
    }

    function DetailBtn(url) {
      event.preventDefault();
      Swal.fire({
        title: '¿Quieres ver los detalles de este producto?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = url
        }
      })
    }
  </script>

</body>

</html>
