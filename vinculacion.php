<?php $titulo = "Vinculación y Extensión" ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    include ('./dotk/00head/analitycs.html');
    include ('../lib20/core/10cabecera.html');
    include ('../lib20/core/20estilos.html');
    include ('../lib20/hgo/zoram_style_header.html');
  ?>
</head>

<body>
  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php
    //include ('../lib18/seph/hf/header.html');
  	//include ('../lib20/hgo/header.html');
  	?>
    <?php include ('../lib20/hgo/veda_navbar.html'); ?>
    <!-- Slider principal -->
    <?php include ('./dotk/01header/01carousel-principal/carousel.html'); ?>
  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <?php include ('./dotk/05main/contenido-vinculacion.html'); ?>

    <div class="container marketing">
      <a id="mapadesitio"></a>
      <br />
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib20/core/60menufooter.php'); ?>
    </div>
  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php //include ('../lib20/seph/hf/footer.html'); ?>
    <?php //include ('../lib20/hgo/footer.html'); ?>
    <?php include ('../lib20/hgo/veda_footer.html'); ?>
  </footer>

  <?php
    include ('../lib20/core/80js.html');
    //include ('../lib20/hgo/zoram_js_footer.html');
  ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib20/core/31script.js"></script>-->


</body>

</html>
