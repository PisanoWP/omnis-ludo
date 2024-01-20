<?php 
get_header(); ?>


<?php
$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="masthead bg-primary text-white text-center" >
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
    <?php
    do_action('oml_show_separator', array('divider-light') ); ?>  
	</header><!-- .page-header -->

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
     
    <article id="post-<?php the_ID(); ?>"  <?php post_class( array('omlwp-archive-article', 'w-75', 'mt-5', 'mx-auto')); ?> >

      <div class="archive-article-imagen">
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
          the_terms( $post->ID, 'post_tag', 'Etiquetas: ', ' / ' ); ?>
        </div>

      </section>

    </article><!-- #post-${ID} -->

    <?php 
    do_action('oml_show_separator'); ?>  

    
	<?php endwhile; ?>

	<?php
  omlwp_archive_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>


<?php 
get_footer(); ?>
