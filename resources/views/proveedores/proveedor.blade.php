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
                <div class="col-4 text-right text-white">
                  <a onclick="CreateBtn('/create_vendor');" class="btn btn-sm btn-primary">Agregar proveedor</a>
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
                  @foreach ($proveedores as $vendor)
                    <tr>
                      <td>{{ $vendor->name }}</td>
                      <td>{{ $vendor->email }}</td>
                      <td>{{ $vendor->telefono }}</td>
                      <td>{{ $vendor->direccion }}</td>
                      <td>{{ $vendor->ciudad }}</td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item"
                              onclick="EditBtn('{{ route('vendor.edit', $vendor->id) }}');">Editar</a>
                            <a class="dropdown-item"
                              onclick="DeleteBtn('{{ route('vendor.delete', ['id' => $vendor->id]) }}');">Eliminar</a>
                            <a class="dropdown-item"
                              onclick="DetailBtn('{{ route('vendor.show', $vendor->id) }}');">Detalles</a>


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
        title: '¿Quieres crear un nuevo proveedor?',
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
        title: '¿Quieres eliminar este proveedor?',
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
        title: '¿Quieres editar este proveedor?',
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
        title: '¿Quieres ver los detalles de este proveedor?',
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
