<?php session_start();
if (empty($_SESSION['id'])) {
    header('Location: ./');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TIENDA Online</title>

    <!-- Fuentes personalizadas para esta plantilla-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Estilos personalizados para esta plantilla-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/css/admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Envoltorio de página -->
    <div id="wrapper">

        <!-- barra lateral -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Barra lateral - Marca -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">ADMINISTRACION <!--<sup>Online</sup>--></div>
            </a>

            <!-- Divisor -->
            <hr class="sidebar-divider my-0">

            <!-- Elemento de navegación - Tablero -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Menús</span></a>
            </li>

            <!-- Divisor -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">
                    <!--i class="fas fa-tag"></i-->
                    <span>Categorias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">
                    <!--i class="fas fa-list"></i-->
                    <span>Productos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">
                    <!--i class="fas fa-list"></i-->
                    <span>salir</span></a>
            </li>

            <!-- Divisor -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Alternador de barra lateral (barra lateral) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- Fin de la barra lateral -->

        <!-- Envoltorio de contenido -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Contenido principal -->
            <div id="content">

                <!-- Barra superior -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Alternar barra lateral (barra superior) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Barra superior Barra de navegación -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Menú desplegable de búsqueda (solo visible XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Desplegable - Mensajes -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Elemento de navegación - Información del usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nombre']; ?></span>
                                <img class="img-profile rounded-circle" src="data:image/jpeg;base64,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">
                            </a>
                            <!-- Desplegable - Información del usuario -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../salir.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- Fin de la barra superior -->

                <!-- Contenido de la página de inicio -->
                <div class="container-fluid">

                    <!-- Encabezado de página -->
                    