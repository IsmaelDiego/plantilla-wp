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
        <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
            
            <?php include("layout/header.php"); ?>

            <?php include("layout/menu.php"); ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid row">
<!-- start page title -->
<?php
                        for ($i = 0; $i <= 18; $i++) { ?>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <!-- Simple card -->
                                <!-- Simple card -->
                            <div class="card">
                                <img class="card-img-top img-fluid" src="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/images/media/sm-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"> Lenovo</h5>
                                    <p class="card-text">Laptop Lenovo IP1 15AMN7 Ryzen 3-7320U 8GB RAM 512GB SSD 15.6" W11</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item small">Precio Lista: S/ 1,679.00</li>
                                    <li class="list-group-item"><b>Precio: S/ 1,499.00</b></li>
                                </ul>
                                <div class="card-body text-center
                                ">
                                    <a href="#" class="card-link"><button type="button" class="btn btn-outline-dark btn-rounded waves-effect waves-light"><i
                        class="fas fa-cart-plus"></i> Agregar al carrito</button></a>
                                </div>
                            </div>
                            </div>
                        <?php } ?>
                        <!-- end page title -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php 
                include ("layout/footer.php");
                ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/js/metismenu.min.js"></script>
        <script src="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/js/waves.js"></script>
        <script src="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="<?php bloginfo('template_url');?>/plantilla/admin/vertical/assets/js/theme.js"></script>

    </body>

</html>