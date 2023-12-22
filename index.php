<?php 
get_header(); ?>

<?php 
include_once OML_THEME_PATH.'/includes/actividades.php'; ?>



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Jueganess</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#sobre-jueganess">Quienes Somos</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#actividades">Actividades</a>
          </li>          
          
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="jornadas-jueganess-2023.php">II Jornadas</a>
          </li>

          
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#ven-a-vernos">Ven a vernos</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#socios">Socios</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contacto">Contacto</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    
    <div class="container d-flex align-items-center flex-column-reverse flex-sm-column-reverse flex-md-column-reverse flex-lg-row flex-lg-row">

      <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar mb-5" src="<?php echo JGN_THEME_URL.'/img/logo-jueganess-marco-blanco.png';?>" alt="Logo Jueganess" >

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Jueganess</h1>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">          
            <i class="fa-solid fa-dice-d6"></i>
            <i class="fa-solid fa-dice-d20"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Asociación Cultural de Leganés</p>

      </div>

      <?php 
      // La actividad destacada, por defecto, SIEMPRE será la última que se cree
      // la questa en la posición 0
      
      $rutaImagenes = JGN_THEME_URL . '/img/actividades/';
      $actividades = get_actividades(); 
      $act = $actividades[0]; ?>
      <div class="container d-flex align-items-center flex-column">
        <?php 
        $imagenCartel = $rutaImagenes . $act['cartel'];
        $imagenAlt =  $act['alt_cartel']; ?>
        
        <img class="img-fluid" src="<?php echo $imagenCartel; ?>" alt="<?php echo $imagenAlt; ?>" >
        
        
      </div>
             

    </div>
  </header>

  <!-- About Section -->
  <section class="page-section mb-0" id="sobre-jueganess">
    <div class="container">

      <!-- About Section Heading -->
      
      <h2 class="page-section-heading text-center text-uppercase text-secondary">¿QUÉ ES JUEGANESS?</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      


      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-6 ml-auto">          
          <p class="lead" ><span class="span-lead">JuegaNess</span> es una asociación cultural sin ánimo de lucro situada en la localidad madrileña de <strong><span class="span-lead">Leganés.</span></strong></p>
          <p class="lead">Se fundó en el año 2018, gracias al esfuerzo de varias personas que vieron la necesidad de tener en el municipio 
            un grupo fijo que fomentara el uso y disfrute de un <strong><span class="span-lead"> ocio alternativo y sano</span></strong>.</p>
          <p class="lead">Nos juntamos los fines de semana, solemos proponer <strong><span class="span-lead"> 
            partidas de rol, diversos juegos de mesa, tanto para adultos como infantiles, y juegos de cartas.</span></strong></p>
          <p class="lead">En nuestras redes sociales tienes más información de lo que hacemos en la asociación y las actividades que se proponen cada semana.</p>
          <h3 class="text-center text-secondary">¡Aquí nadie se queda sin jugar!</h3>

          <p class="lead mt-3">Puedes venir a conocernos los sábados en  <a href="#ccrigoberta" class="js-scroll-trigger" style="text-decoration: underline;">C.C.&nbsp;Rigobeta&nbsp;Menchú</a>,
           y los domingos estamos en el <a href="#ccsaramago" class="js-scroll-trigger"  style="text-decoration: underline;">C.C.&nbsp;José&nbsp;Saramago </a>
          </p>
        </div>

      
        <div class="col-lg-6 ml-auto">
        <img class="img-fluid" src="<?php echo JGN_THEME_URL . '/img/cartel-genérico-jueganess.jpg'; ?>" alt="Cartel Genérico de la Asociación">
        </div>
        
      </div>

      
    </div>
  </section>



  <!-- Actividades Section -->
  <section class="page-section portfolio bg-primary " id="actividades">
    <div class="container">

      <!-- Actividades Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Actividades</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

  
      <!-- Actividades Grid Items -->
      <?php
      mostrar_actividades(); ?>
      

      <div class="row">
        <div class="col-lg-12 mx-auto">
          <p class="lead text-white">
          Solemos colaborar con otras asociaciones que comparten nuestros gustos, así como con el Ayuntamiento de Leganés y el centro DeJóvenes.
          </p>
          <p class="lead text-white">Y también en la radio, en <span style="font-weight: bold;">LGNradio</span> en el  programa semanal de <span style="font-weight: bold;">Hora de Jugar</span>, donde nos podeis escuhar 
            cada miércoles de 15:30 a 16:30 horas, y en él que hablamos de todo lo que rodea a la actualidad rolera y de juegos de mesa.

          </p>

        </div>
      </div>
    </div>
  </section>

  <!-- Ubicación Section -->
  <section class="page-section" id="ven-a-vernos">
    <div class="container">

      <!-- Ubicación Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ven a Vernos</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Ubicación Section Content -->
      <div class="row">
        <div class="col-lg-12 mx-auto">          
            <h3 id="ccrigoberta">Centro Cívico Rigoberta Menchú</h3>
            <p class="lead">
            Todos los <span class="span-lead">sábados de 16:00 a 21:00</span> en el Centro Cívico Rigoberta Menchú de Leganés, Av. Rey Juan Carlos I, 100, 28916 Leganés, Madrid.
            En el barrio de El Carrascal, muy cerca de Parquesur, en la parada de Metrosur de El Carrascal.
            </p>
            <a class="enlace-mapa" href="https://goo.gl/maps/ozySqJ65QrvuWBwd7" target="_blank" title="Ver Mapa">
              <img class="img-fluid" src="<?php echo JGN_THEME_URL . '/img/ubicacion/mapa-ubicacion-cc-rigoberta-menchu-min.png'; ?>" alt="Mapa Ubicación CC Rigoberta Menchú">
            </a>                        
        </div>

          <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      

        <div class="col-lg-12 mx-auto">

          <h3 id="ccsaramago">Centro Cívico José Saramago</h3>
            <p class="lead">
            Los <span class="span-lead">domingos de 10:00 a 14:00</span> en el Centro Cívico José Saramago de Leganés, Av. Mar Mediterráneo, 24, 28918 Leganés, Madrid.
            En el barrio de San Nicasio, cerca de la parada de metro de San Nicasio.
            </p>
            <a class="enlace-mapa" href="https://goo.gl/maps/uRTcjW1gVczFRCtY7" target="_blank" title="Ver Mapa">
              <img class="img-fluid" src="<?php echo JGN_THEME_URL . '/img/ubicacion/mapa-ubicacion-cc-jose-saramago-min.png'; ?>" alt="Mapa Ubicación CC José Saramago">
            </a>                        
                              
        </div>
      </div>

    </div>
  </section>


  <!-- Socios Section -->
  <section class="page-section bg-primary" id="socios">
    <div class="container">

      <!-- Socios Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Socios</h2>

     <!-- Icon Divider -->
     <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-dice"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

      <!-- Socios Section Content -->
      <div class="row">
        <div class="col-lg-12 ml-auto  text-white">
          <p class="lead">Hacerte socio te permite ayudar a la asociación con los gastos comunes: seguro, comprar juegos para la ludoteca, etc.
             Las cuotas son semestrales y la cuantía es de 20€ cada semestre. Se paga en enero y en julio.</p>
        </div>
        
      </div>

    </div>
  </section>


  <!-- Eventos Destacados -->
  <section class="page-section" id="eventos-destacados">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Eventos Destacados</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <ul>
            <li><p class="lead"><span class="span-lead">LGNradio</span>: programa semanal de radio llamado <a href="https://lgnmedios.com/podcasts/" target="_blank" title="Podcast Hora de Jugar">Hora de Jugar</a>. Se retransmite cada miercóles de 15:30 a 16:30 horas, y en él se habla de todo lo que rodea a la actualidad rolera y de juegos de mesa.</p></li>
            <li><p class="lead"><span class="span-lead">Jornadas de puertas abiertas</span>: todos los sábados o domingos que tengamos asignado por el ayuntamiento un centro cívico, invitamos a todo el mundo a que se pase por allí para enseñarles a jugar a diferentes juegos.<br>
              También hacemos actividades para toda la familia o incluso hay quien se lleva su propio juego y lo que quiere es encontrar personas afines para pasar un buen rato.</p></li>
            <li><p class="lead"><span class="span-lead">Jornadas JuegaNess:</span> realizadas en febrero de 2019 en el centro Dejóvenes de Leganés; con gran afluencia de público, medios y editoriales.</p></li>            
            <li><p class="lead"><span class="span-lead">Otros municipios</span>: colaboración junto a la asociación Lupus in Fabula en junio del 2019, dentro del Festival de Fantasía de Fuenlabrada, y en donde llevamos la ludoteca.</p></li>
            <li><p class="lead"><span class="span-lead">Fiestas navideñas</span>: colaboración junto al Ayuntamiento de Leganés en diciembre del 2019, dentro de su programación navideña.</p></li>
            <li><p class="lead"><span class="span-lead">Otras asociaciones</span>: colaboración junto al club Séptimo Grado de La Fortuna (Leganés) en marzo del 2020, dentro de sus jornadas.</p></li>
            
          </ul>
          
      </div>

    </div>
  </section> 

  


  <!-- Contact Section -->
  <section class="page-section bg-primary" id="contacto">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Formas de Contacto</h2>

      <!-- Icon Divider -->
     <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-dice"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

      <!-- Contact Section Form -->
      <div class="row">        
        <div class="col-lg-10 mx-auto  text-white">
          <p class="lead">Aquí tienes nuestras redes sociales donde puedes seguirnos y pedir más información, pero lo mejor es que te pases 
          a conocernos y echar unas partidas ... recuerda, <span style="font-weight: bold;font-size:1.5em;">¡aquí jugamos todos!</span></p>
          <div class="row bg-primary p-3" >
            <div class="col-lg-4 mx-auto" style="color:white;">

              <a class="btn btn-outline-light btn-social mx-1 mb-1" href="https://telegram.me/comunidadjueganess" target="_blank">
                <i class="fa-brands fa-telegram"></i>
              </a>
              @comunidadjueganess
              <br>

              <a class="btn btn-outline-light btn-social mx-1  mb-1" href="mailto:info@jueganess.org" target="_blank">
                <i class="fa-solid fa-envelope"></i>
              </a>
              info@jueganess.org
              <br>

              <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://www.instagram.com/jueganess" target="_blank">
                <i class="fa-brands fa-instagram"></i>
              </a>
              @jueganess
              <br>
            </div>
            <div class="col-lg-4 mx-auto">
              <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://twitter.com/AJueganess" target="_blank">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
              @ajueganess
              <br>

              <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://discord.gg/bRGvxYTsTE" target="_blank">
                <i class="fa-brands fa-discord"></i>
              </a>
              @Jueganess
              <br>

              <!--
              <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://www.facebook.com/AJueganess/" target="_blank">
                <i class="fab fa-fw fa-facebook"></i>
              </a>
              @Ajueganess-->
            </div>

        </div>
      </div>

    </div>
  </section> 

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Ven a Conocernos</h4>
          <p class="lead mb-0 text-justify"><b>CC Rigobeta Menchú</b>
            <br>Av. Rey Juan Carlos I, 100. Leganés
            <br>Sábados 16:00 a 21:00
          </p>
          <hr style="border: 1px solid white;">
          <p class="lead mb-0 text-justify"><b>CC José Saramago</b>
            <br>Av. Mar Mediterráneo, 24. Leganés
            <br>Domingos 10:00 a 14:00
          </p>

        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Más Información</h4>
          
          
          <div class="text-justify">
          <!--
          <a class="btn btn-outline-light btn-social mx-1 mb-1" href="#">
            <i class="fa-brands fa-whatsapp"></i> 
          </a>
          670 05 28 70 / 692 82 72 06
          <br> -->
          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://telegram.me/comunidadjueganess" target="_blank">
            <i class="fa-brands fa-telegram"></i>
          </a>
          @comunidadjueganess
          <br>

          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="mailto:info@jueganess.org" target="_blank">
            <i class="fa-solid fa-envelope"></i>
          </a>
          info@jueganess.org
          <br>

          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://www.instagram.com/jueganess" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
          @jueganess
          <br>
          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://twitter.com/AJueganess" target="_blank">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          @ajueganess
          <br>

          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://discord.gg/bRGvxYTsTE" target="_blank">
            <i class="fa-brands fa-discord"></i>
          </a>
          @Jueganess
          <br>

          <!--
          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://www.facebook.com/AJueganess/" target="_blank">
            <i class="fab fa-fw fa-facebook"></i>
          </a>
          @Ajueganess -->
          
          
          
          
          </div>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Aquí Jugamos Todos</h4>
          <p class="lead mb-0">
            <img style="width: 100%" src="<?php echo JGN_THEME_URL . '/img/tira-dados-jueganess.jpg' ; ?>" alt="Imagen de una banadeja para tirar dados con el logo de jueganess">

          </p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

    <div class="container">
      <small>Copyright &copy; Jueganess 2022</small>
    </div>
    
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->
  <?php 
  generar_popups_actividades(); ?>


<?php 
get_footer(); ?>
