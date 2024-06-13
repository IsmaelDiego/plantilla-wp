
            
            
            <?php get_header(); ?>

            <?php include("layout/menu.php"); ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Inicio</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pagina</a></li>
                                            <li class="breadcrumb-item active">Inicio</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                        <div class="col-xl-12">
                            <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="php bloginfo('template_url');?>/assets/images/media/sm-3.jpg" alt="..." class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3 class="text-white">First slide label</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php bloginfo('template_url');?>/assets/images/media/sm-4.jpg" alt="..." class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3 class="text-white">Second slide label</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php bloginfo('template_url');?>/assets/images/media/sm-5.jpg" alt="..." class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3 class="text-white">Third slide label</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php 
                get_footer();
                ?>

         