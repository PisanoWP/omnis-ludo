  
  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Columna 1 -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <?php
					dynamic_sidebar( 'omlwp_footer_1_3' ); ?>
          
        </div>

        <!-- Footer Columna 2 -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <?php
					dynamic_sidebar( 'omlwp_footer_2_3' ); ?>
          
          <div class="text-justify">
          
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
          
          </div>
        </div>

        <!-- Footer Columna 3 -->
        <div class="col-lg-4">
          <?php
					dynamic_sidebar( 'omlwp_footer_3_3' ); ?>
          <p class="lead mb-0">
            <img style="width: 100%" src="<?php echo JGN_THEME_URL . '/img/tira-dados-jueganess.jpg' ; ?>" loading="lazy" alt="Imagen de una banadeja para tirar dados con el logo de jueganess">
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

  <?php 
   wp_footer(); ?>

</body>
</html>