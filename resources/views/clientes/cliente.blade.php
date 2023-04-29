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
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Clientes</h3>
                </div>
                <div class="col-4 text-right text-white">
                  <a onclick="CreateBtn('create_client');" class="btn btn-sm btn-primary">Agregar clientes</a>
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
                    <th scope="col">Domicilio</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($clientes as $cliente)
                    <tr>
                      <td>{{ $cliente->name }}</td>
                      <td>{{ $cliente->email }}</td>
                      <td>{{ $cliente->telefono }}</td>
                      <td>{{ $cliente->direccion }}</td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item"
                              onclick="EditBtn('{{ route('cliente.edit', $cliente->id) }}');">Editar</a>
                            <a class="dropdown-item"
                              onclick="DeleteBtn('{{ route('cliente.delete', ['id' => $cliente->id]) }}');">Eliminar</a>
                            <a class="dropdown-item"
                              onclick="DetailBtn('{{ route('cliente.show', $cliente->id) }}');">Detalles</a>

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
        title: '¿Quieres crear un nuevo cliente?',
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
        title: '¿Quieres eliminar este cliente?',
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
        title: '¿Quieres editar este cliente?',
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
        title: '¿Quieres ver los detalles de este cliente?',
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
