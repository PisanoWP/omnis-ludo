<?php 
get_header(); ?>

  <section class="page-section mb-0">
    <div class="container">
  <?php
  if (have_posts()): ?>
    <h2>Últimas entradas</h2>

    <?php 
	  while (have_posts()): the_post();  ?>
    <section class="inner-page">
      
      <div class="container">
        <h3><a href="<?php the_permalink();?>" title="<?php echo esc_attr(get_the_title());?>"><?php the_title();?></a></h3>
      </div>
    
      
      <div class="container d-flex flex-column flex-md-row">                
      
        <?php
          $image_title = 'Imagen destadada para '. get_the_title();
          if (has_post_thumbnail()){            
            the_post_thumbnail('[150, 150]', ['class' => 'img-thumbnail', 'loading'=>'lazy', 'title' => esc_attr($image_title) ] );    
          } ?>            
        </div>
        
        <div class="container">
           <?php
           the_content(); ?>            
    
        </div>
        
      </div>
      <footer style="padding-left:12px;">
        <?php the_terms( $post->ID, 'post_tag', 'Etiquetas: ', ' / ' ); ?>
      </footer>
      
      
    </section>
      

    <?php
    endwhile;  
    
    //pulwp_archive_navigation(); 

  else:?>
    <div> No se ha recuperado nada con este criterio</div>

  <?php 
  endif; ?>
    </div>
  </section>


<?php 
get_footer(); ?>
