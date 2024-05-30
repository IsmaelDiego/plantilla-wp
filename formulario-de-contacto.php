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
                    <div class="container-fluid">

                        <!-- start page title -->
                        
                        <!-- end page title -->

                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">FORMULARIO DE CONTACTO</h4>
                                    <p class="card-subtitle mb-4">Por favor, completa el siguiente formulario para ponerte en contacto con nosotros. Estaremos encantados de ayudarte en cualquier consulta que tengas.</p>
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Nombre Completo</label>
                                            <input type="text" class="form-control" id="validationCustom01"  required>
                                            <div class="valid-feedback">
                                              Muy bien!
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">telefono</label>
                                            <input type="text" class="form-control" id="validationCustom02"   required>
                                            <div class="valid-feedback">
                                              Muy bien¡
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Correo electronico</label>
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                              </div>
                                              <input type="text" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
                                              <div class="invalid-feedback">
                                                Ingrese un correo electronico valido.
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="col-md-12 mb-3">
                                            <label for="validationCustom03">Asunto</label>
                                            <input type="text" class="form-control" id="validationCustom03"  required>
                                            <div class="invalid-feedback">
                                              Por favor ingrese un asunto valido.
                                            </div>
                                          </div>
                                          <div class="col-md-12 mb-3 ">
                                            <label for="validationCustom04">Mensaje</label>
                                            <textarea type="text" class="form-control" id="validationCustom04" rows="6" required></textarea>
                                            <div class="invalid-feedback">
                                              Por favor ingrese un mesaje valido.
                                            </div>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="validationCustom05">Nota</label>
                                            <input type="text" class="form-control" id="validationCustom05"  required>
                                            <div class="invalid-feedback">
                                              Por favor ingrese una nota valida.
                                            </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                          <div class="form-group">
                                            <label>Adjuntar archivo ( )</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Selecionar archivo</label>
                                            </div>            
                                        </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox form-check">
                                                <input type="checkbox" class="custom-control-input" id="invalidCheck"
                                                    required>
                                                <label class="custom-control-label" for="invalidCheck">Acepto los Terminos y Condiciones.</label>
                                                <div class="invalid-feedback">
                                                    Debes acptar antes de enviar.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Enviar mensaje</button>
                                    </form>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

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