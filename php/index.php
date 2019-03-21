<?php 
$tituloDelSitio = "Digital movies";
$tituloPrincipal = "Mi sitio de peliculas";
$logo = "images/logo.png";
$tituloH2 = "Peliculas Disponibles";
$logueado = true;
$duracion = 120;
$horas = $duracion/60;
$stars = '<img class="ranking" src="images/star.png" alt="">';
$meGusta = true;
$año = 2002;
$anteojos = false;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php 
      echo $tituloDelSitio;
       ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php 
      echo "<h1>$tituloPrincipal</h1>";
      echo "<img width='50px' src=".$logo." alt='logo del sitio'>";
      echo "<h2>$tituloH2</h2>";
      
     ?>

  <div class="contenedor-principal">

    <p class="centrar">
      <a href="index.html">
        <img id="logo" src="images/logo.png" alt="logo Digital Movies">
      </a>
    </p>

    <h1 class="centrar">Peliculas del Mundo</h1>

    <div id="redes">
      <ul>
        <li><a href="http://facebook.com" target="_blank"><img src="images/fb.png" alt=""></a></li>
        <li><a href="http://instagram.com" target="_blank"><img src="images/inst.png" alt=""></a></li>
        <li><a href="http://twiter.com" target="_blank"><img src="images/tw.png" alt=""></a></li>
        <li><a href="http://snapchat.com" target="_blank"><img src="images/snp.png" alt=""></a></li>
      </ul>
    </div>

    <div>
      <ul>
        <li><a href="listarPelis.html">Acción</a></li>
        <li><a href="listarPelis.html">Comedia</a></li>
        <li><a href="listarPelis.html">Terror</a></li>
        <li><a href="listarPelis.html">Aventura</a></li>
        <li><a href="listarPelis.html">Romance</a></li>
        <li><a href="listarPelis.html">Triller</a></li>
      </ul>
    </div>


      <h2>Peliculas Disponibles</h2>

    <div class="contenedor-pelis">
      <div class="items">
        <img class="poster" src="images/avatar.jpg" alt="">
        <div class="detalle">
          <label>Avatar (2002)</label>
          <label>Acción</label>


          <label>Duración:
          <?php
           echo $horas;
           ?>

           horas</label>
          

          <label>Rating: 5</label>
          <label> 

          <?php
          echo str_repeat($stars, 5);
          ?>
            
            <label>

            <?php
            if ($meGusta){
              echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
            } else {
              echo '<img class="ranking" src="images/thumb-down-icon.png" alt="">';
            }
            ?>
            
            </label>

            <?php 
            if ($año >= 2010 && $año <= 2015){
              echo '<img class="estreno" src="images/estreno3.png" alt="">';
            } else {
              
            }
            ?>

            <img class="taquillera" src="images/ticket.png" alt="">

            <?php
            if ($anteojos){
              echo '<img class="tresd" src="images/anteojos-3d.png" alt="">';
            } else {

            }
            ?>

        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/avengers.jpg" alt="">
        <div class="detalle">
          <label>Avengers (May 2018)</label>
          <label>Acción</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/moana.jpg" alt="">
        <div class="detalle">
          <label>Moana (Mar 2016)</label>
          <label>Animadas</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/rogueone.jpg" alt="">
        <div class="detalle">
          <label>Rogue One (Dic 2017)</label>
          <label>Acción</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/titanic.jpg" alt="">
        <div class="detalle">
          <label>Titanic (Abr 1995)</label>
          <label>Romance</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/dragonball.jpg" alt="">
        <div class="detalle">
          <label>Drangon Ball Z (Jul 2005)</label>
          <label>Animada</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/emoji.jpg" alt="">
        <div class="detalle">
          <label>Emoji (Oct 2016)</label>
          <label>Animada</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>
            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

    </div>



    <div id="piePagina">
      <ul>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        
        <?php
        if ($logueado){
          echo '<li><a href="perfil.html">Mi Perfil</a></li>';
        } else {
          echo '<li><a href="registro.html">Registrate</a></li>
          <li><a href="login.html">Login</a></li>';
        }
        ?>

        
      </ul>
    </div>


  </div>
  </body>
</html>
