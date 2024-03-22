  <form role="search" method="get" class="search-form form-inline justify-content-center my-5" action="<?php echo home_url(); ?>">    
      <span class="screen-reader-text"><?php _e('Buscar:', 'jueganess'); ?></span>
      <input type="search" class="form-control mb-2 mr-sm-2 w-75 search-field" placeholder="<?php _e('¿Qué estas buscando?', 'jueganess'); ?>" value="<?php the_search_query(); ?>" name="s">    
    <button type="submit" class="btn btn-primary mb-2"><i class="fa-solid fa-magnifying-glass" title="Buscar"></i></button>
  </form>

