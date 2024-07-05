<?php get_header(); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();


            ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Simple card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail(array(700, 500));
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="card-title"><?php the_title(); ?></h5>


                                            <p class="card-text"><?php the_content(); ?></p>
                                            <div class="d-flex align-items-center mb-3 ">
                                                <button class="btn btn-danger" type="button" id="minusBtn" onclick="cambiar_cantidad('resta')">-</button>
                                                <input type="text" class="form-control text-center" minlength="0" id="cantidad" value="1" style="width: 100px;" placeholder="1">
                                                <button class="btn btn-primary" type="button" onclick="cambiar_cantidad('suma')">+</button>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary btn-sm p-2">Añadir al carrito</a>
                                            <hr>
                                            <p class="small text-muted"><i class="fas fa-bookmark"> </i> <?php the_category('&nbsp;-&nbsp;'); ?> | <i class="fas fa-tags"></i><?php the_tags('&nbsp', '&nbsp;-&nbsp;', '&nbsp'); ?></p>
                                            <div class="tags row">
                                                <div class=""> </div>
                                                <div class=""></div>
                                            </div>
                                        </div>


                                    </div>
                            <?php
                        endwhile;
                    else :
                        _e('Lo siento no la categoria seleccionada', 'textdomain');
                    endif; ?>

                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="small text-muted text-left"><b></b><i class="fas fa-user-clock"></i> <?php the_author(); ?></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="small text-muted text-right"><b></b><i class="fas fa-clock"></i> <?php the_date(); ?> | <?php the_time(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <?php
                            // Example argument that defines three posts per page.
                            $args = array('posts_per_page' => 10);

                            // Variable to call WP_Query.
                            $the_query = new WP_Query($args);

                            if ($the_query->have_posts()) :
                                // Start the Loop
                                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <!-- start page title -->
                                        <div class="col-3">
                                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                                <div class="container-fluid">

                                                    <div class="col-12">
                                                        <div class="card">
                                                            <a href="<?php the_permalink(); ?>" class="text-center">
                                                                <?php
                                                                if (has_post_thumbnail()) {
                                                                    the_post_thumbnail('medium', array('class' => 'card-image-top alignleft'));
                                                                }
                                                                ?></a>
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?php the_title(); ?></h5>
                                                                <p class="card-text">

                                                                    <?php the_content(); ?>
                                                                    <span class="badge badge-soft-primary float-star"><?php the_tags(); ?></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <!-- end page title -->
                            <?php
                                // End the Loop
                                endwhile;
                            else :
                                // If no posts match this query, output this text.
                                _e('Sorry, no posts matched your criteria.', 'textdomain');
                            endif;

                            wp_reset_postdata();
                            ?>
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