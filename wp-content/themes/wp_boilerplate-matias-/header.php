<!DOCTYPE html>
<html>
   <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>PIZZA PIZZA</title>

	   <?php wp_head(); ?>

  </head>
  <body <?php body_class()?>>
  
       <header class="encabezado-sitio"  style="background-color:#E88206">
  	       <div class="contenedor">
  	 	       <div class="logo">
  	 		      <a href="<?php echo esc_url(home_url('/')); ?>">
  	 		      <img src= "<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logotipo">
  	 	          </a>
  	 	  </div> <!--- logo -->

  	 	 <div class="informacion-encabezado">
  	 	 	<div class="redes-sociales">
  	 	 		<?php $args = array(
  	 	 		    'theme_location' => 'social-menu',
  	 	 		    'container' => 'nav',
  	 	 		    'container_class' => 'sociales',
  	 	 		    'container_id' => 'sociales',
  	 	 		    'link_before' => '<span class="src-text">',
  	 	 		    'link_after' => '</span>'
                  ); 
                 
                 wp_nav_menu($args); ?>
  	 	 	</div><!-------- redes sociales -->
             
             <div class="direccion">
  	 	 		<p style="color:white"> pelvin parsela 19 camino mallarauco</p>
  	 	 		<p style="color:white"> Contactanos +569 45345453</p>
  	 	     </div>

       </div> <!----contenedor -->
   </header>
        <div class="menu-principal">
           <div class="mobile-menu">
          	  <a href="#" class="mobile"><i class="fa fa-bars" aria-hidden="true">
              </i></a>
            </div>

            <div class="contenedor navegacion">
  		    <?php
  		    $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
             'container_class' => 'menu-sitio'

  		     );

              wp_nav_menu($args);

              ?>

          </div>

      </div>
       














