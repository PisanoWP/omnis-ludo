<?php

add_action('oml_show_separator', 'oml_show_separator');
function oml_show_separator( $clases = null) {  ?>
  <?php 
  $class = '';
  if ( !empty( $clases ) ) {
    foreach ($clases as $key => $clase) {
      $class  .= esc_attr($clase) .' ';
    }
  } ?>

  <!-- Icon Divider -->
  <div class="divider-custom <?php echo $class; ?>">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon">
      <i class="fas fa-dice"></i>
    </div>
    <div class="divider-custom-line"></div>
  </div>

<?php 
}


add_filter( 'excerpt_more', 'omlwp_excerpt_more' );

function omlwp_excerpt_more($more) {
   return sprintf( '<a href="%1$s">%2$s</a>',
                       get_permalink( get_the_ID() ),
                       '&nbsp;...&nbsp;Leer más' );
}





function omlwp_archive_navigation() {
	
	global $wp_query ;
	$qryses =$wp_query ;


	$request = $qryses->request;

	$posts_per_page = intval(get_query_var('posts_per_page'));

	if ( get_query_var('paged') ) $paged = get_query_var('paged');
	if ( get_query_var('page') ) $paged = get_query_var('page');

	$numposts = $qryses->found_posts;
	$max_page = $qryses->max_num_pages;


	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}


	$pages_to_show = 5;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
	?>
 
	<nav aria-label="Navegación páginas de noticias">
	<div class="blog-pagination mx-auto">
  <ul class="d-flex flex-directon-row justify-content-center" style=" list-style:none;">
		<?php
		if ($start_page >= 2 && $pages_to_show < $max_page) {
			$first_page_text = __( "Primero", 'gabinetewp' );
			echo '<li class=""><a class="" href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
		} ?>

		<li class="page-item">
		<?php
		previous_posts_link('<<'); ?>
		</li>

		<?php
		for($i = $start_page; $i <= $end_page; $i++) {
			if($i == $paged) {
				echo '<li class="active mx-3" aria-current="page"><a class="btn btn-primary " href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
			} else {
				echo '<li class="mx-3"><a class="btn btn-outline-primary " href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
			}
		} ?>

		<li class="page-item">
			<?php			
			next_posts_link('>>'); ?>
    </li>

  </ul>
	</div>
</nav>

<?php
} 
/* End page navi */