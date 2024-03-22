<?php 
get_header(); ?>

	<section class="section-404 section">
		<div class="container text-center">
			<h2 class="title-404 text-center">404</h2>    
      <img class="masthead-avatar mb-5" src="<?php echo JGN_THEME_URL.'/assets/images/heroquest-nada.jpg';?>" alt="Imagen carta tesoro de Heroquest Nada" >
			<p class="intro text-center"><?php _e('La página solicitada no existe', 'jueganess'); ?></p>
		</div><!--//container-->
		
		<div class="p-1 bg-primary">
		<?php 
			get_search_form(); ?>
		</div>

	</section>



<?php 
get_footer(); ?>
