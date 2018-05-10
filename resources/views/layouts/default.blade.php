<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cafeteria</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.png" />
  @yield('customstyles')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{route('index')}}"><img src="/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{route('index')}}"><img src="/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-account-settings-variant"></i>Administrar</a>
          </li>
          
        </ul>

        <ul class="navbar-nav navbar-nav-right header-links d-none d-md-flex">
          <li class="nav-item ">
            <a href="{{ url('/logout')}}" class="nav-link"><i class="mdi mdi-account-settings-variant"></i>Cerrar sesión</a>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              
              <div class="profile-name">
                <p class="name">{{ Auth::user()->name }}</p>
              </div>
            </div>
          </li>
          @if(Auth::user()->idTipoUsuario == 1)
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Administración gral</span><i class="menu-arrow"></i></a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('comidas.index')}}">Comidas</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('usuarios.index')}}">Usuarios</a></li>
                  
                </ul>
              </div>
            </li>
          @endif
          @if(Auth::user()->idTipoUsuario == 2)
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Pedidos</span><i class="menu-arrow"></i></a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('pedidos.index')}}">Historial de pedidos</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('pedidos.create')}}">Crear pedido</a></li>
                  
                </ul>
              </div>
            </li>
          @endif
          @if(Auth::user()->idTipoUsuario == 3)
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Ordenes</span><i class="menu-arrow"></i></a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('ordenes.index')}}">Lista de ordenes</a></li>
                  
                </ul>
              </div>
            </li>
          @endif
          </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="/node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="/js/maps.js"></script>
  <!-- End custom js for this page-->
  @yield('customscripts')
</body>

</html>