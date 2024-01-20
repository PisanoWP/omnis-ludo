<?php 
get_header(); ?>

  <?php
  if (have_posts()):
    while (have_posts()): the_post();  ?>
        

      <article id="<?php echo esc_attr("post-" . get_the_id() ); ?>" class="page-section mt-5 mb-0 container" id="sobre-jueganess">
      
        <header>
          <h1 class="page-section-heading text-center text-uppercase text-secondary"><?php the_title();?></h1>

          <!-- Icon Divider -->
          <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
              <i class="fas fa-dice"></i>
            </div>
            <div class="divider-custom-line"></div>
          </div>       

        </header>
                        
        <section class="row">
          <div class="col-lg-6 ml-auto">          
            <?php
            the_content(); ?>    
          </div>
        
          <div class="col-lg-6 ml-auto text-center">
            <?php
            $image_title = 'Imagen destadada para '. get_the_title();
            if (has_post_thumbnail()){   
              the_post_thumbnail( '[150, 150]', ['class' => 'img-fluid', 'title' => esc_attr($image_title) ] );
            } else { ?>
              <img class="mastheadavatar mb-5 mx-auto" style="width:50%; height:auto;" src="<?php echo JGN_THEME_URL.'/img/logo-jueganess-marco-blanco.png';?>" alt="Logo Jueganess" >
            <?php
            } ?>                     
          </div>          
        </section>

        <footer class="pl-2">
          <?php 
          the_terms( $post->ID, 'post_tag', 'Etiquetas: ', ' / ' ); ?>
        </footer>
      
      </article>

    <?php
    endwhile;  

  else:?>
  <section class="page-section mb-0">    
    <div><?php _e('No se ha recuperado nada con este criterio', 'jueganess'); ?></div>
  </section>

  <?php 
  endif; ?>

<?php 
get_footer(); ?>