<?php get_header(); ?>
      
     <?php 
      $pagina_blog = get_option('page_for_posts');
     $imagen = get_post_thumbnail_id($pagina_blog);
     $imagen = wp_get_attachment_image_src($imagen, 'full');
     ?>
     <div class="hero" style="background-image:url(<?php echo $imagen[0]; ?>);">
     	<div class="contenido-hero">
     		<div class="texto-hero">
     			<h1><?php echo get_the_title($pagina_blog); ?></h1>
     		</div>
     	</div>
     </div>

     <div class="principal contenedor">
     	<div class="contenedor-grid">
     	<main class="columnas2-3 contenido-paginas ">

     		<?php while(have_posts()): the_post(); ?>
     			<article class="entrada-blog">
     				<?php the_post_thumbnail('especialidades'); ?>

     				<header class="informacion-entrada clear">
     					<time>
     						<?php echo the_time('d'); ?>
     						<span><?php the_time('M'); ?></span>

     					</time>

     					<div class="titulo-entrada">

     						<?php the_title('<h2>', '</h2>'); ?>

     						<p class="autor">
     						 <i class="fa fa-user" aria-hidden="true"><?php the_author(); ?> </i>
     						</p></div>




     				</header>
     				 <div class="contenido-entrada">
     				 	<?php the_excerpt(); ?>

     				 	<button type="button" class="btn btn-secondary btn-lg"  id="boton" style="background-color:#FF831B; color:white; ">Leer Más</button>
                   </div>
     				


     			</article>
     		<?php endwhile; ?>
     	
     	  </main>
     	   <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>