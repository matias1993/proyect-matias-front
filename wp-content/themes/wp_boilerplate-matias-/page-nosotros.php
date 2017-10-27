<?php get_header(); ?>
      
      <?php while(have_posts()): the_post(); ?>




      	 <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">

      	 	<div class="contenido-hero">
      	 		<div class="texto-hero">
      	 			<?php the_title('<h1>', '</h1>'); ?>
      	 		</div>
      	 	</div>
      	 </div>

 

      	
	 
     <div class="principal contenedor">
     	
     	<main class="texto-centrado contenido-paginas">
     		<?php the_content(); ?>

     	</main>
     </div>

      <div class="informacion-cajas contenedor clear">

      	<div class=row>
         <div class="col-md-4 col-sm-4" >
         
          <div class="contenido-caja-1" >

          	 <?php
           $id_imagen = get_field('imagen1');
           $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
           ?>

           <img src="<?php echo $imagen[0] ?>" class="imagen-caja" class="img-responsive" id="foto1" >

          	<?php the_field('descripcion1');?>


         </div> 
        </div> <!-- fin primera foto -->

       <div class="col-md-4 col-sm-4">
         
           <div class="contenido-caja-2">

           	 <?php
             $id_imagen = get_field('imagen2');
             $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
             ?>

           <img src="<?php echo $imagen[0] ?>" class="imagen-caja" class="img-responsive" id="foto2" >

          	<?php the_field('descripcion2');?>
            </div> 

           
        </div> <!-- fin segunda foto -->


        <div class="col-md-4 col-sm-4">
         
         <div class="contenido-caja-3">

          	<?php
           $id_imagen = get_field('imagen3');
           $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
           ?>

           <img src="<?php echo $imagen[0] ?>" class="imagen-caja" class="img-responsive" id="foto3" >

          	<?php the_field('descripcion3');?>


         </div> 
        </div> <!-- fin tercera  foto -->

    </div>


  </div> <!--- informacion cajas -->
 <?php endwhile; ?>






<?php get_footer(); ?>