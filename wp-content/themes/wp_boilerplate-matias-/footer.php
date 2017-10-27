<footer>
   <?php
    $args = array(

    	'theme_location' => 'header-menu',
         'container' => 'nav', 
         'after' => '<span class="separador"> | </span>'
     );

    wp_nav_menu($args);

   ?>

   <div class="ubicacion">
   	 <p style="color:white;">Parcela 19 pelvin camino mallarauco, peñaflor</p>
   	 <p style="color:white;">Telefono: +569 45345453</p>
   </div>

     <p class="copyrigth" style="color:white;">Todos los derechos reservados <?php echo date('Y'); ?></p>

 </footer>  


  
 <?php wp_footer(); ?>


</body>
</html>