<?php get_header(); ?>
      
      <?php while(have_posts()): the_post(); ?>




      	 <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">

      	 	<div class="contenido-hero">
      	 		<div class="texto-hero">
      	 			<?php the_title('<h1>', '</h1>'); ?>
      	 		</div>
      	 	</div>
      	 </div>

 

      	
	 
     <div class="principal contenedor contacto">

     	<div class=row>

     	 <div class="col-md-6 col-sm-6 ">
     	
     	<main class="texto-centrado contenido-paginas">
     		
     		<?php get_template_part('template/formulario', 'reservacion'); ?>
        </main>
       </div>
   </div>
     </div>

 <?php endwhile; ?>






<?php get_footer(); ?>