<?php get_header(); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
        <?php if ( have_posts() ) :
                                            while ( have_posts() ) : the_post();
                                                
                                            
                                    ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- Simple card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                <?php if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( array( 500, 500  ) );
                                                }
                                                ?>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title"><?php the_title();?></h5>
                                    <p class="card-text"><?php the_content();?></p>
                                    <div class="input-group input-group-sm mb-3">
                                        <button class="btn btn-danger" type="button" id="minusBtn" onclick="cambiar_cantidad('resta')">-</button>
                                        <input type="text" class="form-control text-center" minlength="0" id="cantidad" value="1" placeholder="1" aria-label="Quantity" aria-describedby="basic-addon2">
                                        <button class="btn btn-primary" type="button" onclick="cambiar_cantidad('suma')">+</button>
                                    </div>
                                    <p id="totalPrice" class="mb-0">Total Price: $50</p>
                                    <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                                    <hr>
                                    <div class="tags row">      
                                        <div class="col-6"><?php the_tags( 'Etiquetas:&nbsp; &nbsp;', '&nbsp;-&nbsp;', '<br />' ); ?> </div>
                                        <div class="col-6"><p>Categoria: <?php the_category( '&nbsp;-&nbsp;' ); ?></p></div>
                                    </div>
                                </div>
                                

                            </div> 
                            <?php
                                endwhile;
                                        else :
                                            _e( 'Lo siento no la categoria seleccionada', 'textdomain' );
                                        endif; ?>
                            
                        </div>
                        <div class="card-footer">
                        <div class="row">
                                <div class="col-6">
                        <p class="small text-muted text-left"><b>Publicado por:&nbsp</b> <?php the_author(); ?></p>
                                </div>
                                <div class="col-6">
                            <p class="small text-muted text-right"><b>Fecha de publicación:</b>&nbsp <?php the_date(); ?> | <?php the_time(); ?></p>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end page-content -->
</div><!-- end main-content -->

<script>
    function cambiar_cantidad(tipo) {
            var cantidad_actual = document.getElementById('cantidad').value;
            if (tipo == "suma") {
                var cantidad_nueva = parseInt(cantidad_actual) + 1;
            } else {
                if (tipo == "resta" && cantidad_actual > 1) {
                    var cantidad_nueva = parseInt(cantidad_actual) - 1;
                } else {
                    var cantidad_nueva = 0;
                }
            }
            document.getElementById('cantidad').value = cantidad_nueva;
        }
        
    

</script>

<?php get_footer(); ?>
