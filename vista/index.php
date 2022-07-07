<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OCI | FOSE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/../plantilla/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../plantilla/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../plantilla/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../plantilla/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../plantilla/../plantilla/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Registro FOSE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../plantilla/../plantilla/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de FOSE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Registro</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- CONTENEDOR PRINCIPAL -->
    <!-- Main content -->
    
    <div class="col-md-12">
       
        <div class="card card-primary">
             <!-- CABECERA -->
            <div class="card-header">
                <h3 class="card-title">
                    Registro de FOSE
                </h3>
            </div>
            <!-- ./CABECERA FIN -->
            
            <!-- FORMULARIO -->
            <form>
                <div class="card-body">
                    <!-- FILA 1 -->
                    <div class="row">
                        <!-- CARGO -->
                        <div class="col-8">
                            <div class="form-group">
                                <label>
                                    Remitente
                                </label>
                                <input type="text" class="form-control" placeholder="Nombres y Apellidos">
                            </div>
                        </div>
                        <!-- ./CARGO -->

                        <!-- EXPEDIENTE -->
                        <div class="col-2">
                            <div class="form-group">
                                <label>
                                    Expediente
                                </label>
                                <input type="text" class="form-control" placeholder="0000-2022">
                            </div>
                        </div>
                        <!-- ./EXPEDIENTE -->

                        <!-- NUMERO -->
                        <div class="col-1">
                            <div class="form-group">
                                <label>
                                    Número
                                </label>
                                <input type="text" class="form-control" placeholder="001">
                            </div>
                        </div>

                        <div class="col-1">
                          <div class="form-group">
                                <br>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                          </div>
                        </div>
                        <!-- ./NUMERO -->
                    </div>
                    <!-- ./FILA 1 -->

                    <!-- FILA 2 -->
                    <div class="row">
                        <!-- CARGO -->
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    Cargo
                                </label>
                                <input type="text" class="form-control" placeholder="Docente">
                            </div>
                        </div>
                        <!-- ./CARGO -->

                        <!-- ENTIDAD -->
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    Entidad
                                </label>
                                <input type="text" class="form-control" placeholder="DREP">
                            </div>
                        </div>
                        <!-- ./ENTIDAD -->

                        <!-- FECHA -->
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    Fecha
                                </label>
                                <input type="text" class="form-control" placeholder="mm/dd/aa">
                            </div>
                        </div>
                        <!-- ./FECHA -->

                        <!-- HORA -->
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    Hora
                                </label>
                                <input type="text" class="form-control" placeholder="001">
                            </div>
                        </div>
                        <!-- ./HORA -->
                    </div>
                    <!-- ./FILA 2 -->

                    <!-- FILA 3 -->
                    <div class="row">
                        <!-- ASUNTO -->
                        <div class="col-8">
                            <div class="form-group">
                                <label>
                                    Asunto
                                </label>
                                <input type="text" class="form-control" placeholder="Asunto del expediente">
                            </div>
                        </div>
                        <!-- ./ASUNTO -->

                        <!-- AÑEXADO A -->
                        <div class="col-4">
                            <div class="form-group">
                                <label>
                                    Añexado a
                                </label>
                                <input type="text" class="form-control" placeholder="A...">
                            </div>
                        </div>
                        <!-- ./AÑEXADO A -->
                    </div>
                    <!-- ./FILA 3 -->

                    <!-- FILA 4 -->
                    <div class="row">
                        <!-- DOCUMENTO -->
                        <div class="col-6">
                            <div class="form-group">
                                <label>
                                    Documento
                                </label>
                                <input type="text" class="form-control" placeholder="Número de documento">
                            </div>
                        </div>
                        <!-- ./DOCUMENTO -->
                        
                        <!-- FOLIOS -->
                        <div class="col-2">
                            <div class="form-group">
                                <label>
                                    Folios
                                </label>
                                <input type="text" class="form-control" placeholder="00">
                            </div>
                        </div>
                        <!-- ./FOLIOS -->
                        
                        <!-- ELEMENTOS -->
                        <div class="col-4">
                            <div class="form-group">
                                <label>
                                    Elementos adjuntos
                                </label>
                                <input type="text" class="form-control" placeholder="Elementos">
                            </div>
                        </div>
                        <!-- ./ELEMENTOS -->
                    </div>
                    <!-- ./FILA 4 -->

                    <!-- FILA 5 -->
                    <div class="row">
                        <!-- ITEM -->
                        <div class="col-1">
                            <div class="form-group">
                                <label>
                                    Item
                                </label>
                                <input type="text" class="form-control" placeholder="000">
                            </div>
                        </div>
                        <!-- ./ITEM -->
                        
                        <!-- ACCION -->
                        <div class="col-2">
                            <div class="form-group">
                                <label>
                                    Acción/Conclusión
                                </label>
                                <input type="text" class="form-control" placeholder="Acción Conclusión">
                            </div>
                        </div>
                        <!-- ./ACCION -->
                        
                        <!-- PERSONAL -->
                        <div class="col-2">
                            <div class="form-group">
                                <label>
                                    Personal
                                </label>
                                <input type="text" class="form-control" placeholder="Personal">
                            </div>
                        </div>
                        <!-- ./PERSONAL -->

                        <!-- DETALLE -->
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    Detalles
                                </label>
                                <input type="text" class="form-control" placeholder="Observaciones">
                            </div>
                        </div>
                        <!-- ./DETALLE -->

                        <!-- FECHA -->
                        <div class="col-2">
                            <div class="form-group">
                                <label>
                                    Fecha
                                </label>
                                <input type="text" class="form-control" placeholder="mm/dd/aa">
                            </div>
                        </div>
                        <!-- ./FECHA -->

                        <!-- FIRMA -->
                        <div class="col-2">
                            <div class="form-group">
                                <label>
                                    Firma
                                </label>
                                <input type="text" class="form-control" placeholder="Firma personal">
                            </div>
                        </div>
                        <!-- ./FIRMA -->
                    </div>
                    <!-- ./FILA 45 -->
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-danger">Limpiar</button>
                </div>
            </form>
            <!-- /.FORMULARIO -->
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Barra Lateral</h5>
      <p>Contenido en la Barra</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Karen Pari
    </div>
    <!-- Default to the left -->
    <strong>Oficina de Control Institucional &copy; 2022</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../plantilla/../plantilla/dist/js/adminlte.min.js"></script>
</body>
</html>
