<header class="bg-primary text-white text-center pb-1" style="padding-top:125px;">

		<?php if ( is_search() ) : ?>

			<h1>
				<?php
				printf(					
					esc_html__( 'Resultados para "%s"', 'jueganess' ),
					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
				); ?>
			</h1>

		<?php else : ?>

			<h1 class="page-title"><?php esc_html_e( 'Nada por aquí', 'jueganess' ); ?></h1>

		<?php endif; ?>

		<?php
		do_action('oml_show_separator', array('divider-light') ); ?>  

</header><!-- .page-header -->


<article <?php post_class( array('omlwp-archive-article', 'w-75', 'mt-5', 'mx-auto')); ?> >

	<div class="d-none d-sm-none d-md-block w-25">
		<img class="masthead-avatar mb-5" src="<?php echo JGN_THEME_URL.'/assets/images/heroquest-nada.jpg';?>" alt="Imagen carta tesoro de Heroquest Nada" >
	</div>

	<section class="d-flex flex-column justify-content-around w-75">

		<header class="entry-header">
			<h2 class="entry-title default-max-width text-center">
				<?php
				_e( 'Pues no hemos recuperado nada ...', 'jueganess' );  ?>
		</header><!-- .entry-header -->

		<div class="archive-article-content entry-content">
			<?php 
			get_search_form(); ?>
		</div><!-- .entry-content -->

		<div class="archive-article-terms entry-footer ">						
			<?php 
    	do_action('oml_show_separator'); ?>  
		</div>

	</section>

</article><!-- #post-${ID} -->