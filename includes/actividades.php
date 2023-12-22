<?php 


function mostrar_actividades(){

  $rutaImagenes = JGN_THEME_URL . '/img/actividades/';
  $actividades = get_actividades();
  
  ?>
  <div class="row">
    <?php
    foreach ($actividades as $key => $act) { ?>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo "#cartel-actvididades-{$act['id']}";?>">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <div>
              <?php 
              $imagenCartel = $rutaImagenes . $act['cartel'];
              $imagenAlt = $act['alt_cartel']; ?>
              <img class="img-fluid" src="<?php echo $imagenCartel;?>" alt="<?php echo $imagenAlt;?>" >
            </div>
                        
          </div>
        </div>

    <?php 
    } ?>

  </div>

  <?php
} 


function generar_popups_actividades(){ 

  $rutaImagenes = JGN_THEME_URL . '/img/actividades/';
  $actividades = get_actividades();


  
  foreach ($actividades as $key => $act) { ?>

    
  <div class="portfolio-modal modal fade" id="<?php echo "cartel-actvididades-{$act['id']}";?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $act['title'];?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-dice"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>

                <!-- Portfolio Modal - Text -->
                <p class="text-justify">
                  <?php 
                  echo $act['content'];?>
                </p>
                <p class="mb-5">
                  <span class="h3 span-lead"><b>¡AQUÍ NADIE SE QUEDA SIN JUGAR!</b></span>
                </p>

                <!-- Portfolio Modal - Image -->
                <?php 
                $imagenCartel = $rutaImagenes . $act['cartel'];
                $imagenAlt = $act['alt_cartel']; ?>                

                <img class="img-fluid rounded mb-5" src="<?php echo $imagenCartel;?>" alt="<?php echo $imagenAlt;?>" >
                
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar Ventana
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  }

}




function get_actividades(){

  
  $actividades = array();

  $actividades[] = array('id' => 'nov23'
                      , 'title' => 'JUEGOS RÁPIDOS Y FÁCILES'
                      , 'content' => ''
                      , 'cartel' => 'cartel-juegos-rapidos-noviembre-2023.jpg'
                      , 'alt_cartel' => 'Cartel de juegos rápidos y fáciles'
                        );

  $actividades[] = array('id' => 'torneomansiones23'
                      , 'title' => 'I TORNEO MANSIONES DE LA LOCURA 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-torneo-mansiones-2023.jpg'
                      , 'alt_cartel' => 'Cartel del I Torneo de Mansiones de la Locura 2023'
                        );


  $actividades[] = array('id' => 'jul23'
                      , 'title' => 'JULIO 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-actividades-julio-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Julio de 2023'
                        );

  $actividades[] = array('id' => 'jun23'
                      , 'title' => 'JUNIO 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-actividades-junio-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Junio de 2023'
                        );
                        
  $actividades['jornada2023'] = array('id' => 'jor23'
                        , 'title' => 'II JORNADAS JUEGANESS 2023'
                        , 'content' => ' <div class="d-flex align-items-center"><a href="jornadas-jueganess-2023.php" class="btn btn-primary btn-lg" target="_blank">
                        <i class="fa-solid fa-dice-d6"></i>
                          <i class="fa-solid fa-dice-d20"></i><br>
                          II JORNADAS JUEGANESS<br>
                          <i class="fas fa-dice"></i>
                          
                        </a></div>'
                        , 'cartel' => 'cartel-ii-jornadas-juegannes-2023.jpg'
                        , 'alt_cartel' => 'Cartel de las II jornadas de Jueganess de 2023'
                          );
                          


  $actividades[] = array('id' => 'mar23'
                      , 'title' => 'MARZO 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-actividades-marzo-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Marzo de 2023'
                        );

                          /*
  $actividades[] = array('id' => 'torneohq23'
                      , 'title' => 'I TORNEO HEROQUEST 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-i-torneo-heroquest-jueganess-febrero-2023.png'
                      , 'alt_cartel' => 'Cartel del I Torneo de HeroQuest para Febrero y Marzo de 2023'
                        );


  $actividades[] = array('id' => 'feb23'
                      , 'title' => 'FEBRERO 2023'
                      , 'content' => 'Aquí de nuevo con la programación para este mes, que viene cargadito<br>
                      Este primer finde de febrero seguimos con nuestros "Aprende a jugar...", Por un lado, el juego de escaramuzas de Batman miniature game y por 
                      el juego de cartas de Rabbitz & Robots, <b>defiende tu huerto de terribles hordas de conejos zombies mutantes.</b>
                      La semana del carnaval no podemos dejar pasar la oportunidad de hacer un concurso de disfraces y no pueden faltar nuestras sesiones de juegos rápidos.<br>
                      El sábado 18, <b>No solo D&D day</b>, ven a jugar al rol con nosotros, hay mundo más allá de Dragones y mazmorras y 
                      arrancamos un <b>apasionante torneo de HeroQuest</b> y el domingo, segunda edición 
                      para aprender a jugar a  BloodBowl<br>
                      Terminamos el mes con un día dedicado al señor de los anillos, y reservamos el domingo en el CC Saramago a jugar en familia.<br>
                      Además siempre tenemos mesas abiertas y muchos más juegos disponibles.<br>    '
                      , 'cartel' => 'cartel-actividades-febrero-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Febrero de 2023'
                        );

                        
  $actividades[] = array('id' => 'ene23'
                      , 'title' => 'ENERO 2023'
                      , 'content' => '<h3 class="mb-5">¡¡¡ FELIZ AÑO NUEVO!!!</h3>
                      <p class="text-justify">De vuelta del parón navideño ya estamos listos para seguir jugando y probar los regalos
                        que no has traído los sus majestades por ser buenos ( a los caóticos neutrales les ha caído un parchís) <br>
                        Este sábado vamos a darle a los wargames, con partidas introductorias al Killteam y el domingo en el Centro Cívico del Saramago, Comander.<br>
                        Para la siguiente semana tenemos un torneo abierto de Bloodbowl y más "aprende a jugar", ¿no sabes? no te preocupes, 
                        nosotros te enseñamos.<br>
                        Terminamos el mes con un taller de pinturas, para que te traigas tu minis y pases un rato divertido pintando y 
                        que  la marea gris vaya desapareciendo de tus cajones y tome color sobre la mesa de juego.<br>
                        Además siempre tenemos mesas abiertas y muchos más juegos disponibles.<br>                  
                      </p>'
                      , 'cartel' => 'cartel-actividades-enero-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Enero de 2023'
                        );                        

  $actividades[] = array('id' => 'fikividad22'
                      , 'title' => 'FRIKIVIDAD 2022'
                      , 'content' => 'Ven a celebrar la Navidad con nosotros, muchas partidas introductorias para que conozcas
                      nuevos juegos, Once Pice TCG, Commander o Fábulas de Peluche<br>
                      No podía faltar una partida de rol, aventureros en el nuevo mundo, y por supuesto, muchos jugos rápidos y para 
                      toda la familia, ¿has oÍdo un dómino gigante y <b>SORTEOS</b>? puede ser, pásate y lo averiguas ;-).<br>
                      Además siempre tenemos mesas abiertas y muchos más juegos disponibles.<br>     '
                      , 'cartel' => 'cartel-actividades-frikividad-2022.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para celebrar la frikividad'
                        );
  
  $actividades[] = array('id' => 'dic22'
                      , 'title' => 'DICIEMBRE 2022'
                      , 'content' => 'Para diciembre tenemos muchas actividades programadas para sábados y domingos.<br>
                      Empezamos el mes con juegos de roles ocultos, y partidas introductorias a Once Pice TCG.<br>
                      Un día reservado para probar prototipos de juegos, ¿tienes un proto y quieres testearlo?, pues traételo, y más partidas introductorias
                      para conocer nuevos juegos. <br>Y para llegar a las fiestas, tenemos un día especial, <b>Frikinafvidad</b> y el Domingo 18 ven con toda 
                      los tuyos a disfrutar de juegos familiares.<br>
                      Además siempre tenemos mesas abiertas y muchos más juegos disponibles.<br>     '
                      , 'cartel' => 'cartel-actividades-diciembre-2022.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Diciembre de 2022'
                        );

  $actividades[] = array('id' => 'nov22'
                      , 'title' => 'NOVIEMBRE 2022'
                      , 'content' => 'Este mes tenemos partidas introductorias al Dicemasters y Bloodbowl, una tarde reservadada a juegos rápidos y terminamos 
                      el mes con Mutan Year Zone.<br>
                      Además siempre tenemos mesas abiertas y muchos más juegos disponibles<br> '
                      , 'cartel' => 'cartel-actividades-noviembre-2022.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Noviembre de 2022'
                        );
                        */

  return $actividades;

}


?>


<?php 
  function mostrar_partidas(){
?>
  

  <div>
  <p class="lead text-white">
      <span style="font-weight: bold;">La inscripción a las partidas de rol se hará de forma presencial el mismo día del evento, en orden de llegada.</span>
  </p>
  </div>

  <!-- MAÑANA -->
  <div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">        
        <i class="fa-solid fa-dice-d6"></i>
        &nbsp;
        <span class="text-center text-uppercase text-white mb-0">Mañana</span>
        &nbsp;
        <i class="fa-solid fa-dice-d6"></i>
      </div>  
    <div class="divider-custom-line"></div>        
  </div>


  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">El Señor de los Anillos “La venganza de Fimran” </h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Kiko Robles</li>
          <li><b>Número de jugadores:</b> 6</li>
          <li><b>Sistema:</b> World of Fantasy</li>
          <li><b>Edad recomendada:</b> 10-99</li>
          <li><b>Sinopsis:</b> Embárcate en una fantástica aventura basada en un módulo clásico del juego MERP adaptada al sistema World of Fantasy de Dani Vicente. Conviértete en un hobbit que siente la llamada de lo desconocido (y la riqueza) en los siniestros rincones de las Quebradas de los Túmulos</li>
        </ul>            
        </p>
      </div>
    </div>      

    <!--
    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Mala sangre </h5>
        <p class="card-text">
          <ul>
            <li><b>Máster:</b> Fede (7º Grado)</li>
            <li><b>Sistema:</b> Ratas en las paredes </li>
            <li><b>Número de jugadores:</b> 4</li>
            <li><b>Partida adulta:</b> Terror</li>
            <li><b>Sinopsis:</b> España, años 90. Un grupo multidisciplinar que trabaja para el ayuntamiento de la ciudad dormitorio de Leganés. Tiene la tarea de solucionar los problemas de salud pública de uno de los barrios más desfavorecidos en la Fortuna. Donde una niña pequeña ha sido atacada por ratas hace apenas unos días. Con las elecciones tan cercas y los intereses inmobiliarios en el mega proyecto  Laguna Ness ,el ayuntamiento no puede permitirse otro escándalo más y poner en peligro el proyecto .</li>
          </ul>      
        </p>
      </div>
    </div>
  -->
  <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Conan: La sangre hierve</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Daniel Fernández (Madrid by Night)</li>
          <li><b>Número de jugadores:</b> hasta 5</li>
          <li><b>Sistema:</b> Conan, aventuras en una Era inimaginable </li>
          <li><b>Edad recomendada:</b> 16+</li>
          <li><b>Sinopsis:</b> La primavera llega a las tierras Noderheim. Dos tribus una Asgardiana y otra Cimeria han llegado a un Armisticio uniendo ambas tribus tanto políticamente como renovando la sangre. Los jóvenes están deseosos de demostrar su valía. <bR>
Pero la tensión regresa al desaparecer un grupo de miembros de ambas tribus, ¿Quién serán los culpables?, ¿Habrán enfadado a los dioses?, ¿Alguien quiere romper la Paz?, atrévete a descubrirlo.

        </li>
        </ul>            
        </p>
      </div>
    </div>    


  </div>  
  
  
  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Ronda de Noche</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Roberto (Rheovarn)</li>
          <li><b>Número de jugadores:</b> 4</li>
          <li><b>Sistema:</b> Pathfinder 2ª</li>
          <li><b>Edad recomendad:</b> 16+</li>
          <li><b>Sinopsis:</b> Una noche más de ronda para la guardia nocturna. Una noche más... que quizá pueda cambiar el destino de la ciudad de Mayritt.</li>          
        </ul>            
        </p>
      </div>
    </div>      

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Ángel de la guarda</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Juan (Akuma Studio)</li>
          <li><b>Número de jugadores:</b> 3-5</li>
          <li><b>Sistema:</b> Tiny D6</li>
          <li><b>Edad recomendada:</b> 10+</li>
          <li><b>Sinopsis:</b> El apocalipsis comenzó, y la plaga zombi se extiende por la ciudad. Hay que salir de aquí, como sea. Abre la puerta...habrá que abrirse paso...</li>
        </ul>            
        </p>
      </div>
    </div>      

  </div>

  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Blades in the Dark</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Carlos Zanchito</li>
          <li><b>Número de jugadores:</b> 3-4</li>
          <li><b>Sistema:</b>  Blades in the Dark</li>
          <li><b>Edad recomendad:</b> 16+ (Actividades criminales, Violencia, Palabrotas, Alcohol)</li>
          <li><b>Sinopsis:</b> Blades in the Dark es un juego de rol sobre una banda de atrevidos malandrines (ladrones, contrabandistas, sectarios, revolucionarios y todo tipo de buscavidas) persiguiendo su fortuna en las calles malditas de una ciudad industrial fantástica. Habrá golpes, persecuciones, misterios sobrenaturales, tratos peligrosos, peleas sangrientas y sobre todo, grandes riquezas que conseguir. Si es que sois lo suficientemente atrevidos como para haceros con ellas.<br>
          Vuestra pequeña banda deberá prosperar entre las amenazas de bandas rivales, poderosas familias nobles, fantasmas vengativos, los Casacas Azules de la guardia de la ciudad y el canto de sirena que son vuestros propios vicios personales.<br>
          ¿Os alzaréis hasta conseguir el poder en los bajos fondos criminales? ¿Qué estáis dispuestos a hacer para llegar a lo más alto?
        </li>
        </ul>            
        </p>
      </div>
    </div>      

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">El Beale de Boregal</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Adrián (Eidorian_WB)</li>
          <li><b>Número de jugadores:</b> 4</li>
          <li><b>Sistema:</b> Numenera</li>
          <li><b>Edad recomendada:</b> 16+</li>
          <li><b>Sinopsis:</b>  Mientras cruzáis el camino errante, contempláis una extraña escena: dos jóvenes se dirigen hacia vosotros a lomos de un Escutimorfo. A partir de este punto deberéis de empezar a tomar decisiones, algunas serán tribales, pero otras pueden llegar a cambiar el destino del Noveno Mundo.<br>
          En “El Beale de Boregal”, los jugadores tendrán la oportunidad de explorar zonas desconocidas del Noveno Mundo mientras ponen a prueba su motivación y la fuerza de su convicción.
          </li>
        </ul>            
        </p>
      </div>
    </div>      

  </div>


  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">El sueño de las Faeries</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> David C</li>
          <li><b>Número de jugadores:</b> 3-5</li>
          <li><b>Sistema:</b>  Pathfinder para Savage Worlds</li>
          <li><b>Edad recomendada:</b> 12+</li>
          <li><b>Sinopsis:</b> En la aldea de Entrecascadas, están sucediendo cosas extrañas, los habitantes parecen estar bajo una especie de encantamiento y las hadas de la zona se han vuelto violentas. Alguien tendrá que investigarlo y ese alguien sois vosotros.
        </li>
        </ul>            
        </p>
      </div>
    </div>      

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">La Llamada Al Hogar.</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Kevin A.K.A. Assay (7°Grado)</li>
          <li><b>Número de jugadores:</b> De 4 a 6</li>
          <li><b>Sistema:</b> Anillo Único (D12 y D6)</li>
          <li><b>Edad recomendada:</b> Todos los públicos</li>
          <li><b>Sinopsis:</b>"10 años antes de la caída de Smaug el Terrible y la conquista de Erebor, las Tierras ásperas eran un lugar aún más salvaje y pocos eran los indómitos que se avezaban a viajar por estos senderos tan peligrosos.<br>
            Nos encontramos en "Hacha Hendida", el único asentamiento Enano en las tierras de Rhovannion. Al ser uno de los pocos enclaves del Yermo se ha convertido en un paso seguro para mercaderes y compañías errantes. Uno de estos Errantes es Bindolin un elfo Sinda perteneciente al Bosque Negro. Después de largo tiempo viviendo en soledad y explorando el yermo ha sido reclamado por su Rey Thranduil. Su cometido es presentarse ante él a la mayor brevedad posible. Nuestra aventura unirá a Bindolin junto a una compañía de Enanos de Hacha Hendida que ayudarán a éste a llegar ante su Rey a cambio de una recompensa jugosa por sus servicios.
          </li>
        </ul>            
        </p>
      </div>
    </div>      

  </div>

  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Zark, Sol Púrpura-El ídolo</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Alejandro Yañez</li>
          <li><b>Número de jugadores:</b> 4-5</li>
          <li><b>Sistema:</b> D6-Rápido</li>
          <li><b>Edad recomendada:</b> 12+</li>
          <li><b>Sinopsis:</b> Los piratas del Estrella de la Noche se frotan las manos cuando ven en la distancia un barco varado en el océano de arena aunque lo que parecía un jugoso botín, pronto se convertirá en un problema inesperado y mortal. <br>

"Zark, Sol Púrpura" es ambientación de estilo ciencia ficción del subgénero de Espada y planeta/Romance planetario cuyos referentes son Flash Gordon, Una princesa en Marte, Buck Rogers... Zark, es una de las nuevas ambientaciones que se incluirán en ULTRAMUNDOS, nuestro nuevo juego.  
        </li>
        </ul>            
        </p>
      </div>
    </div>      


    

  </div>


 




  <!-- TARDE -->
  <div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">        
        <i class="fa-solid fa-dice-d20"></i>
        &nbsp;
        <span class="text-center text-uppercase text-white mb-0">Tarde</span>
        &nbsp;
        <i class="fa-solid fa-dice-d20"></i>
      </div>  
    <div class="divider-custom-line"></div>
  </div>

  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">El Señor de los Anillos “La venganza de Fimran”</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Kiko Robles</li>
          <li><b>Número de jugadores:</b> 6</li>
          <li><b>Sistema:</b>  World of Fantasy</li>
          <li><b>Edad recomendada:</b> 10-99</li>
          <li><b>Sinopsis:</b> Embárcate en una fantástica aventura basada en un módulo clásico del juego MERP adaptada al sistema World of Fantasy de Dani Vicente. Conviértete en un hobbit que siente la llamada de lo desconocido (y la riqueza) en los siniestros rincones de las Quebradas de los Túmulos.
        </li>
        </ul>            
        </p>
      </div>
    </div>      

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Ronda de Noche</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Roberto (Rheovarn)</li>
          <li><b>Número de jugadores:</b> 4</li>
          <li><b>Sistema:</b> Pathfinder 2ª</li>
          <li><b>Edad recomendad:</b> 16+</li>
          <li><b>Sinopsis:</b> Una noche más de ronda para la guardia nocturna. Una noche más... que quizá pueda cambiar el destino de la ciudad de Mayritt.</li>          
        </ul>            
        </p>
      </div>
    </div>     
    <!--
    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Reo Inquisitionis</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Roberto (Rheovarn)</li>
          <li><b>Número de jugadores:</b> 4</li>
          <li><b>Sistema:</b> Pathfinder 2ª</li>
          <li><b>Edad recomendada:</b> 16+</li>
          <li><b>Sinopsis:</b>Ha llegado el día de la ejecución. Vuestro trabajo es simple... escoltar al reo, líder de un depravado culto herético, hasta el cadalso. ¿Qué podría salir mal?
          </li>
        </ul>            
        </p>
      </div>
    </div>      -->

  </div>


  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Ángel de la guarda</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Juan (Akuma Studio)</li>
          <li><b>Número de jugadores:</b> 3-5</li>
          <li><b>Sistema:</b> Tiny D6 </li>
          <li><b>Edad recomendada:</b> 10+</li>
          <li><b>Sinopsis:</b> El apocalipsis comenzó, y la plaga zombi se extiende por la ciudad. Hay que salir de aquí, como sea. Abre la puerta...habrá que abrirse paso…
        </li>
        </ul>            
        </p>
      </div>
    </div>      

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">El festival de las mariposas</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> David C</li>
          <li><b>Número de jugadores:</b> 3-5</li>
          <li><b>Sistema:</b> Pathfinder para Savage Worlds</li>
          <li><b>Edad recomendada:</b> 12+</li>
          <li><b>Sinopsis:</b> El festival de las mariposas es la mayor celebración de Puntaarena. Este año además se celebra la inauguración de  la nueva catedral. Un lugar de fiesta, celebración y Paz…😈
          </li>
        </ul>            
        </p>
      </div>
    </div>    
    

  </div>


  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">El árbol de la prosperidad </h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Raúl Perea</li>
          <li><b>Número de jugadores:</b> de 3 a 6</li>
          <li><b>Sistema:</b> Ryuutama</li>
          <li><b>Edad recomendada:</b> a partir de 8 años</li>
          <li><b>Sinopsis:</b> Un misterioso fenómeno llamado la Sequía está afectando terriblemente a vuestro pueblo y el último rayo de esperanza radica en un grupo de jóvenes que parten en busca de un fruto del árbol de la prosperidad que dicen que puede conceder dicha a quien lo consiga. Obviamente vosotros sois esos jóvenes que marchan hacía la aventura de sus vidas
        </li>
        </ul>            
        </p>
      </div>
    </div>      

    <!--
    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">En tierra de nadie</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Jesús (Geiko)</li>
          <li><b>Número de jugadores:</b> de 3 a 5</li>
          <li><b>Sistema:</b> La llamada de Cthulhu</li>
          <li><b>Edad recomendada:</b> 16+</li>
          <li><b>Sinopsis:</b>Partida ambientada en la I Guerra Mundial. La división Rainbow lleva unas semanas en reserva, teniendo que combatir solamente con el calor y el aburrimiento. Esta situación acabará pronto con la llegada de un mensajero.
          </li>
        </ul>            
        </p>
      </div>
    </div>  -->

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Romper La Caja</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Adrián (Eidorian_WB)</li>
          <li><b>Número de jugadores:</b> 4</li>
          <li><b>Sistema:</b> Cyberpunk RED</li>
          <li><b>Edad recomendada:</b> 16+ (Actividades criminales, Violencia, Palabrotas, Alcohol)</li>
          <li><b>Sinopsis:</b> Salir a la calle suele ofrecer algo de aventura, pero hoy es especial. El equipo pisa el asfalto en busca de acción. Al llegar a su primera parada local, se encuentran con
un camión del Servicio Postal que entrega un paquete en una tienda de la esquina. El camión está bastante trucado, con el chasis blindado, cristales antibalas y una metralleta
integrada, manejada por un chico escuálido que lleva un chaleco flak y un casco que parecen tres tallas demasiado grandes. Shirly, la señora de correos que conduce
el camión a diario, hoy va ataviada con cuero negro y Kevlar… Su tecnopelo está peinado de tal manera que parece que tiene orejas de gato. Cuando ve al grupo, saluda con la mano
y dice, con su típica voz chillona: “Hola chumbas ¿Habéis visto la que se está liando en la zona de obras? Me han hecho hacer el reparto de hoy con equipo de Zona Caliente."
        </li>
        </ul>            
        </p>
      </div>
    </div>    

  </div>


  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">

    
    
    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Band of Blades</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Carlos Zanchito</li>
          <li><b>Número de jugadores:</b> 3-5</li>
          <li><b>Sistema:</b> Band of Blades</li>
          <li><b>Edad recomendada:</b> 18+ (Violencia, horror corporal)</li>
          <li><b>Sinopsis:</b>La batalla de los Campos Altos sería la victoria definitiva de la civilización sobre el Rey de las Cenizas. Miles de orgullosos legionarios y poderosas guerreras marchando liderados por los radiantes Elegidos, extendiéndose desde horizonte a horizonte.<br>
          Pero nada pudo prepararlos para las huestes no muertas. Monstruos más grandes que castillos, formados por cuerpos cosidos entre sí. Brujas derritiendo los rostros de vuestras compañeras con una simple mirada. Bestias de metal espinado que rezumaban ponzoña que arde con una llama más negra que la misma noche… Los Elegidos de los dioses cayeron de su Gloria, la Legión fue erradicada en un solo día, y las huestes del Rey de las Cenizas avanzan hacia los reinos del este como una marea silenciosa e imparable. Sólo vosotros, los últimos supervivientes de los Campos Altos, podéis dar la voz de alarma… Si conseguís sobrevivir y llegar a la civilización antes que las hordas no muertas.<br>          
          </li>
        </ul>            
        </p>
      </div>
    </div>      

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">Cybersalles-Le Projet Chrysalide</h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> David Arkerion</li>
          <li><b>Número de jugadores:</b> 4-5</li>
          <li><b>Sistema:</b> D6-Rápido</li>
          <li><b>Edad recomendada:</b> 12+ </li>
          <li><b>Sinopsis:</b>  "Le Projet Chrysalide" es una aventura emocionante y llena de acción y tecnología que ofrece a los jugadores la oportunidad de probar nuevos y poderosos implantes militares para luchar contra un enemigo formidable y casi desconocido. 
<br>
Aventura de corte militar en el frente de batalla contra Reichmark donde tendrán la oportunidad de probar nuevos implantes y conocer de primera mano los avances reales de la guerra en la que está sumida la poderosa Cybersalles.

        </li>
        </ul>            
        </p>
      </div>
    </div>    

  </div>


  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">
  <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
      <h5 class="card-title">El resurgir del Dragón: Fragmentos de la extraña oscuridad </h5>
        <p class="card-text">
        <ul>
          <li><b>Máster:</b> Nacho Fernández (Madrid by Night)</li>
          <li><b>Número de jugadores:</b> hasta 4</li>
          <li><b>Sistema:</b> El resurgir del Dragón</li>
          <li><b>Edad recomendada:</b> 14+ </li>
          <li><b>Sinopsis:</b> Una gran explosión sacude la noche en la ciudad de Tabalard, acompañada de gritos y muerte. Una extraña criatura avanza desbocada por la ciudad, arrasando con todo y con todos los que salen a su paso. Los aventureros deberán investigar lo ocurrido y dar con el culpable lo antes posible o la ciudad y sus habitantes sucumbirán a la extraña oscuridad.

        </li>
        </ul>            
        </p>
      </div>
    </div>   
    
  </div>
  




<?php
} 


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

