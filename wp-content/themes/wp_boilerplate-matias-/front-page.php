<?php get_header(); ?>
      
      <?php while(have_posts()): the_post(); ?>

         <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="contenido-hero">
      	 		<div class="texto-hero">
      	 		  <h1><?php bloginfo('description'); ?></h1>
      	 		      <?php the_content(); ?>
      	 		      <button type="button" class="btn btn-secondary btn-lg"  id="boton" style="background-color:#FF831B; color:white;">Leer Más</button>
      	 		</div>
      	 	  </div>
      	  </div>

        <?php endwhile;?>
       <div class="principal contenedor">

       	    <main class=" contenedor-grid texto-centrado contenido-paginas">
               <h2 class="rojo texto-centrado" style="color:#C4160A;">Nuestras Especialidades</h2>
                 <?php $args = array(
                   'posts_per_page' => 3,
                   'orderby' => 'rand',
                   'post_type' => 'especialidades',
                   'category_name' => 'pizzas'
                   );
     		       $especialidades = new WP_Query($args);
     		       while($especialidades->have_posts()): $especialidades->the_post();
     		  	?>
                
     		  <div class=" col-md-4 col-sm-4 hidden-xs" >
     		  	 <div class="contenido-especialidad">
     		  		<?php the_post_thumbnail('especialidades_portrait'); ?>
     		  	 <div class="informacion-platillo">
     		  		<?php the_title('<h3>', '</h3>'); ?>
     		  		<?php the_content(); ?>
     		  		<p class="precio">$<?php the_field('precio'); ?></p>
     		  		<button type="button" class="btn btn-secondary btn-lg"  id="boton" style="background-color:#FF831B; color:white;">Leer Más</button>
                  </div>
                 </div>
               </div>
     		  	<?php endwhile; wp_reset_postdata(); ?>
     	   </main>
        </div>

         <section class="ingredientes">
      	    <div class="contenedor-grid">
      		    <?php while(have_posts()): the_post(); ?>
      		  <div class=" col-md-6 col-sm-6 visible-sm">
                <?php the_field('contenido'); ?>
              </div>
                
      		 <div class=" col-md-5 col-sm-6 visible-sm">
      			<img src="<?php the_field('imagen-1'); ?>" id="piza">
      		 </div>
      		  <?php endwhile; ?>
      	
           </div>

         </section> <!--- seccion ingredientes ---->

         <section class="contenedor">
         	<h2 class="texto rojo texto-centrado" style="color:#C4160A;"><span>Galeria de Imagenes</span></h2>
         	 <?php $url = get_page_by_title('Galeria'); ?>
         	 <?php echo get_post_gallery($url->ID); ?>

         </section> <!-----galeria-->

         <section class="ubicacion-reservacion">
         	<div class="contenedor-grid">
         		<div class="columnas2-4">
         			<div id="map">

         			</div>

         			
         		</div>
         		<div class="columnas2-4">
         			<?php get_template_part('template/formulario', 'reservacion'); ?>
         		</div>
         	</div>
          </section>

           <script>
             var map;
             function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
             center: {lat: -34.397, lng: 150.644},
             zoom: 8
             });
             }
          </script>
           <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7WTq8AP0H_3DhvNNBid0NOu5_JEzMKUE&callback=initMap"
            async defer></script>

            <!--- ajustar mapa -->

            <script>


             $ = jQuery.noConflict();

            	var map = $('#map');
            	if(mapa-length > 0){
            		if($(document).width() >= breakpoint){
            			ajustarMapa(0);

            		} else {
            			ajustarMapa(200);
            		}

            	}

            	function ajustarMapa(altura){

                    if(altura ==0 ){

            		var ubicacionSection = $('.ubicacion-reservacion');
            		var ubicacionAltura = ubicacionSection.heigth();
            		$('#map').css({'heigth': ubicacionAltura});

            	} else {
                   $('map').css({'heigth': altura});
            	}
             }

             $(window).resize(function()){

             	if($(document).width() >= breakpoint){
            			ajustarMapa(0);

            		} else {
            			ajustarMapa(200);
            		}

             });


<?php get_footer(); ?>