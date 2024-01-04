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
          <div class="col-lg-12 ml-auto">          
            <?php
            the_content(); ?>    
          </div>
                  
        </section>

        <footer class="">          
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