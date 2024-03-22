<?php 

add_action('oml_section_actividades', 'oml_section_actividades');
function oml_section_actividades(){ ?>

  <section class="page-section portfolio bg-primary " id="actividades">
  <div class="container">

    <!-- Actividades Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-white mb-0"><?php _e('Actividades', 'jueganess'); ?></h2>

    <!-- Icon Divider -->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-dice"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>


    <?php 
    get_search_form(); ?>
    
	

    <!-- Actividades Grid Items -->
    <div class="row">
    <?php
    $args = array('category_name' => 'actividades',
                  'post_type' => 'post', 
                  'posts_per_page' => 6,  );

    $qryact = new WP_Query( $args );

    if ($qryact->have_posts()) : 
      while ($qryact->have_posts()):
        $qryact->the_post(); ?>
        <div class="col-md-6 col-lg-4">

          <style>
            a.x {
    color: #333; /* Color del texto normal */
    text-decoration: none; /* Quita el subrayado predeterminado */
    transition: color 0.3s ease, box-shadow 0.3s ease; /* Transición para un cambio suave de color y resplandor */
}

/* Estilo al pasar el ratón sobre el enlace */
a.x:hover {
    color: #007bff; /* Cambia el color del texto al pasar el ratón */
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.8); /* Añade un resplandor azul al pasar el ratón */
}
</style>
          <a class="x" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">                                  
              <?php               
              if (has_post_thumbnail()){            
                the_post_thumbnail('[150, 150]', ['class' => 'img-fluid', 'loading'=>'lazy' ] );    
              } ?>                        
              
          </a>
                        
          
        </div>
      <?php
      endwhile; 

    endif;?>
    </div>

  </div>

</section>

<?php 
} ?>



<?php 
function get_colaboradores(){
  $colaboradores = array();

  $colaboradores[] = array( 'title'=> 'De Jovenes', 'logo' => 'logo-dejovenes.jpg', 'alt_logo' => 'Logo DeJovenes', 'url' =>'https://www.dejovenesleganes.es/', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'HT Publishers','logo' => 'logo-htc-publishers.png', 'alt_logo' => 'Logo HTC Publishers', 'url' =>'https://htpublishers.es/', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'Falomir Juegos','logo' => 'logo-falomir.png', 'alt_logo' => 'Logo Falomir Juegos', 'url' =>'https://falomirjuegos.com', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'Bastión de Mundos','logo' => 'logo-bastion-de-mundos.png', 'alt_logo' => 'Logo Bastión de Mundos', 'url' =>'https://bastiondemundos.es/', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'Eclipse Editorial','logo' => 'logo-eclipse.png', 'alt_logo' => 'Logo Eclipse', 'url' =>'https://eclipseeditorial.com/games', 'class' => false );
  $colaboradores[] = array( 'title'=> 'GDM Games','logo' => 'logo-gdm.png', 'alt_logo' => 'Logo GDM', 'url' =>'https://gdmgames.com/', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'Nosolorol','logo' => 'logo-nosolorol.png', 'alt_logo' => 'Logo NoSolo Rol', 'url' =>'https://www.nosolorol.com', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'Sugar Editorial','logo' => 'logo-sugar.png', 'alt_logo' => 'Logo Sugar editorial', 'url' =>'https://sugaareditorial.com/', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'Madrid By Night','logo' => 'logo-madrid-by-night.jpg', 'alt_logo' => 'Logo Madrid By Night', 'url' =>'http://madridbynight.es/', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'Colmena de Papel','logo' => 'logo-colmena-de-papel.png', 'alt_logo' => 'Logo Colmena de Papel', 'url' =>'https://www.colmenadepapel.com/', 'class' => false );
  $colaboradores[] = array( 'title' => 'Con Pluma y Pixel', 'logo' => 'logo-con-pluma-y-pixel.png', 'alt_logo' => 'Logo Con Pluma y Pixel', 'url' =>'https://conplumaypixel.com/', 'class' => 'flex-fill' );    
  $colaboradores[] = array( 'title'=> 'Generación X - Getafe','logo' => 'logo-gen-x-getafe.png', 'alt_logo' => 'Logo Gen X', 'url' =>'https://www.generacionx.es/', 'class' => false );
  $colaboradores[] = array( 'title'=> 'Big Bang Games', 'logo' => 'logo-big-bang-games.png', 'alt_logo' => 'Logo Big Bang Games', 'url' =>'https://www.thebigbanggames.com/', 'class' => 'flex-fill' );
  $colaboradores[] = array( 'title'=> 'El Señor Miyagi', 'logo' => 'logo-sr-miyagi.jpg', 'alt_logo' => 'Logo Sr Miyagi', 'url' =>'https://www.miyagi.es/es/', 'class' => 'flex-fill' );
  $colaboradores[] = array( 'title'=> 'Holocubierta','logo' => 'logo-holocubierta.jpg', 'alt_logo' => 'Logo Holocubierta', 'url' =>'https://www.holocubierta.com/', 'class' => false );
  $colaboradores[] = array( 'title'=> 'Mercurio','logo' => 'logo-mercurio-distribucion.jpg', 'alt_logo' => 'Logo Mercurio distribuciones', 'url' =>'https://mercurio.com.es/', 'class' => false  );
  $colaboradores[] = array( 'title'=> 'Walhalla ediciones','logo' => 'logo-walhalla-ediciones.png', 'alt_logo' => 'Logo Walhalla Ediciones', 'url' =>'https://walhallaediciones.com/', 'class' => false );
  $colaboradores[] = array( 'title'=> 'El Refugio de Ryhope','logo' => 'logo-el-refugio-de-ryhope.png', 'alt_logo' => 'Logo el refugio de ryhope', 'url' =>'https://www.elrefugioeditorial.com/', 'class' => false );  
  $colaboradores[] = array( 'title'=> 'Draco Ideas','logo' => 'logo-draco-ideas.png', 'alt_logo' => 'Logo Draco Ideas', 'url' =>'https://dracoideas.com/', 'class' => false );  
  $colaboradores[] = array( 'title'=> 'Other Selves','logo' => 'logo-other-selves.png', 'alt_logo' => 'Logo Other Selves', 'url' =>'http://www.other-selves.com/', 'class' => false );
  $colaboradores[] = array( 'title'=> 'Akuma Studio','logo' => 'logo-akuma-studio.jpg', 'alt_logo' => 'Logo Akuma Studio', 'url' =>'https://twitter.com/AkumaRPG', 'class' => false );
  $colaboradores[] = array( 'title'=> 'Rocket Lemon Games','logo' => 'logo-rocket-lemon.png', 'alt_logo' => 'Logo Rocket Lemon', 'url' =>'https://rocketlemongames.com/', 'class' => false );  
  $colaboradores[] = array( 'title'=> 'Asociación Ludo','logo' => 'logo-ludo.png', 'alt_logo' => 'Logo Ludo', 'url' =>'https://asociacionludo.com/', 'class' => false  );  
  $colaboradores[] = array( 'title'=> 'Asociación Éter','logo' => 'logo-eter.png', 'alt_logo' => 'Logo Éter', 'url' =>'https://asociacioneter.org/', 'class' => false );
  $colaboradores[] = array( 'title'=> 'La Mazmorra juegos de rol','logo' => 'logo-mazmorra.png', 'alt_logo' => 'Logo Mazmorra Juegos de rol', 'url' =>'https://lamazmorrajuegosderol.wordpress.com/', 'class' => false );
  $colaboradores[] = array( 'title'=> 'Nordic Baby','logo' => 'logo-nordic-baby.png', 'alt_logo' => 'Logo Noridc Baby', 'url' =>'https://nordicbaby.es', 'class' => false );
  $colaboradores[] = array( 'title'=> 'Jugando por ellos','logo' => 'logo-jugando-por-ellos.png', 'alt_logo' => 'Logo Jugando por Ellos', 'url' =>'http://www.jugandoporellos.es/', 'class' => 'flex-fill' );                        

  return $colaboradores;                        

}

