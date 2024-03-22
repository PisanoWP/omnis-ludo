<?php 
get_header(); ?>


<?php
$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>
	<header class="masthead bg-primary text-white text-center" >
    <h1>
      <?php
      printf(					
        esc_html__( 'Resultados para "%s"', 'jueganess' ),
        '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
      ); ?>
    </h1>
    <?php
    do_action('oml_show_separator', array('divider-light') ); ?>  

  <div class="search-result-count default-max-width">
      <?php
      printf(
        esc_html(
          /* translators: %d: The number of search results. */
          _n(
            'Hemos encontrado %d resultado para tu búsqueda.',
            'Hemos encontrado %d resultados para tu búsqueda.',
            (int) $wp_query->found_posts,
            'jueganess'
          )
        ),
        (int) $wp_query->found_posts
      );
      ?>
    </div><!-- .search-result-count -->
    
	</header><!-- .page-header -->

  

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
     
    <article id="post-<?php the_ID(); ?>"  <?php post_class( array('omlwp-archive-article', 'w-75', 'mt-5', 'mx-auto')); ?> >

      <div class="archive-article-imagen d-none d-sm-none d-md-block ">
        <?php
        $image_title = 'Imagen destadada para '. get_the_title();
        if (has_post_thumbnail()){   
          the_post_thumbnail( 'thumbnail-16-9', ['class' => 'img-fluid', 'title' => esc_attr($image_title) ] );
        } else { ?>
          <img class="masthead-avatar mb-5" src="<?php echo JGN_THEME_URL.'/img/logo-jueganess-marco-blanco.png';?>" alt="Logo Jueganess" >
        <?php
        } ?>

      </div>

      <section class="d-flex flex-column justify-content-around">

        <header class="entry-header">
          <?php
          the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );  ?>
        </header><!-- .entry-header -->

        <div class="archive-article-content entry-content">
          <?php 
          the_excerpt(); ?>
        </div><!-- .entry-content -->

        <div class="archive-article-terms entry-footer ">
          <?php           
          the_terms( $post->ID, 'category', __('Categorías: ', 'jueganess'), ' / ' ); 
          echo '<br>';          
          the_terms( $post->ID, 'post_tag', 'Etiquetas: ', ' / ' ); ?>
        </div>

      </section>

    </article><!-- #post-${ID} -->

    <?php 
    do_action('oml_show_separator'); ?>  

    
	<?php endwhile; ?>

	<?php
  omlwp_archive_navigation(); ?>

<?php else: ?>
	<?php 
  get_template_part( 'parts/sin-datos' ); ?>
      
<?php endif; ?>


<?php 
get_footer(); ?>
