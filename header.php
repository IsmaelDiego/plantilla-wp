<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/images/favicon.icon">

    <!-- App css -->
    <link href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>


        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <img src="<?php bloginfo('template_url');?>/img/imagotipo-DEVWEB 2.png" width="100%" alt="">
                </div>

                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'menu_left',
                        'container' => 'div',
                        'container_id' => 'sidebar-menu',
                        'items_wrap' => '<ul class="metismenu list-unstyled" id="side-menu">%3$s</ul>',
                    )
                ); ?>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Proyectos</li>
                        <li>
                            <a href="proyectos.php" class="waves-effect"><i class="fas fa-folder-open"></i><span>Todos los proyectos</span></a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-sliders-h"></i><span>Por lenguaje</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="productos.php">javascript</a></li>
                                <li><a href="productos.html">Python</a></li>
                                <li><a href="productos.html">Java</a></li>
                                <li><a href="productos.html">C++</a></li>
                                <li><a href="productos.html">Otros</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Sistemas Desarrollados</li>
                        <li>
                            <a href="#" class="waves-effect"><i class="fas fa-folder-open"></i><span>Todos los Sistemas</span></a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-sliders-h"></i><span>Por Categoria</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Gestión de Proyectos</a></li>
                                <li><a href="charts-morris.html">Recursos Humanos</a></li>
                                <li><a href="#">Contabilidad</a></li>
                                <li><a href="#">Otros</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Plantillas Web</li>
                        <li>
                            <a href="#" class="waves-effect"><i class="fas fa-network-wired"></i><span>Todos las Plantillas</span></a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-sliders-h"></i><span>Por Categoria</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Negocios</a></li>
                                <li><a href="#">Educación</a></li>
                                <li><a href="#">Salud</a></li>
                                <li><a href="#">Otros</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Servicios</li>
                        <li>
                            <a href="#" class="waves-effect"><i class="fas fa-medal"></i><span>Tutoría en Línea</span></a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="fab fa-leanpub"></i><span>Consultoría</span></a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="fas fa-rocket"></i><span>Desarrollo a medida</span></a>
                        </li>
                        <li>
                            <a href="auditoria-de-codigo.php" class="waves-effect"><i class="fas fa-laptop-code"></i><span>Auditoría de código</span></a>
                        </li>

                        <li class="menu-title">Mas Info</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-people-carry"></i><span>Nosotros</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="sobre-nosotros.php">Sobre Nosotros</a></li>
                                <li><a href="nuestro-equipo.php">Nuestro Equipo</a></li>
                                <li><a href="testimonios.php">Testimonios</a></li>
                                <li><a href="politicas-de-privacidad.php">Políticas de privacidad</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-headset"></i><span>Contacto</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="informacion-de-contacto.php">Información de contacto</a></li>
                                <li><a href="formulario-de-contacto.php">Fomulario de Contacto</a></li>
                                <li><a href="preguntas-frecuentes.php">Preguntas Frecuentes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-spa"></i> Ver carrito
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                Aplicaciones
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                Software
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                Systemas y Demos
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                Apps
                            </a>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-none d-sm-inline-block ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge badge-danger badge-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="plantilla/admin/vertical/assets/images/users/avatar-2.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                            <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-success rounded-circle">
                                                <i class="mdi mdi-cloud-download-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Download Available !</h6>
                                            <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                Please download here.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="plantilla/admin/vertical/assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                            <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="plantilla/admin/vertical/assets/images/users/avatar-2.jpg" alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Ismael Diego</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Mi info</span>
                                <span>
                                    <span class="badge badge-pill badge-info">3</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Mis archivos</span>
                                <span>
                                    <span class="badge badge-pill badge-warning">1</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Configurar
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Lock Account</span>
                            </a>
                            <a class="dropdown-item  d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Cerrar Sesión</span>
                                <i class="mdi mdi-clock-outline"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>