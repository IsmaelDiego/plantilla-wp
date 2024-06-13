<?php 
function register_my_menus() {

  //Registrar menu
    register_nav_menus(
      array(
        'menu_left' => __( 'main_menu_left_' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

   add_filter();
 
   
?>