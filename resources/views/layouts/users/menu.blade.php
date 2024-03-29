<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
      aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="{{ route('home') }}">
      <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/profile.png">
            </span>

          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Bienvenido!</h6>
          </div>
          <a href="{{ route('profile.edit') }}" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>Mi perfil</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-settings-gear-65"></i>
            <span>Ajustes</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-calendar-grid-58"></i>
            <span>Actividad</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-support-16"></i>
            <span>Soporte</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run"></i>
            <span>Cerrar sesión</span>
          </a>
        </div>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="{{ route('home') }}">
              <img src="{{ asset('argon') }}/img/brand/blue.png">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
              aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search"
            aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-search"></span>
            </div>
          </div>
        </div>
      </form>
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Tablero') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('users') }}">
            <i class="ni ni-circle-08 text-red"></i>
            <span class="nav-link-text">Usuarios</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile.edit') }}">
            <i class="ni ni-trophy text-purple"></i>
            <span class="nav-link-text">Admin</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('clients') }}">
            <i class="ni ni-bullet-list-67 text-orange"></i> {{ __('Clientes') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products') }}">
            <i class="ni ni-archive-2 text-default"></i>
            <span class="nav-link-text">Productos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('vendor') }}">
            <i class="ni ni-delivery-fast text-pink"></i> {{ __('Proveedores') }}
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('icons') }}">
            <i class="ni ni-planet text-blue"></i> {{ __('Iconos') }}
          </a>
        </li>

      </ul>
      <!-- Divider -->

    </div>
  </div>
</nav>
