<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"  media="screen,projection"/>
    <link rel="stylesheet" href="">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <!--Navbar-->
    <section>
        <div class="navbar-fixed">
            <nav>
              <div class="nav-wrapper" >
                <a href="#!" class="brand-logo left"><img class="fondo_wolf"src="img/navbar.png" alt="wolf fondo"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="large material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>application/views/public/index.html">Inicio</a></li>
                    <li><a href="<?php echo base_url();?>application/views/public/index.html#equipo">Equipos</a></li>
                    <li><a href="<?php echo base_url();?>application/views/public/quienesomos.html">Quienes somos</a></li>     
                    <li><a href="<?php echo base_url();?>application/views/public/index.html#patrocinador">Patrocinadores</a></li>
                    <li><a href="<?php echo base_url();?>application/views/public/index.html#contactanos">Contactanos</a></li>
                    <li><a href="<?php echo base_url();?>application/views/public/tienda.html">Tienda</a></li>
                  </ul>
              </div>
            </nav>
          </div>
    
          <ul class="sidenav" id="mobile-demo">
            <a class="iniciar" href="#">Iniciar sesi?n</a>
            <a class="close sidenav-close" href="#"><i class="material-icons">close</i></a>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="index.html#equipo">Equipos</a></li>
            <li><a href="quienesomos.html">Quienes somos</a></li>     
            <li><a href="index.html#patrocinador">Patrocinadores</a></li>
            <li><a href="index.html#contactanos">Contactanos</a></li>
            <li><a href="tineda.html">Tienda</a></li>
          </ul>
    </section>

    <!--Slider-->
    <section>
        <div class="slider">
            <i class="Medium material-icons indicador-right">keyboard_arrow_right</i>
            <i class="Medium material-icons indicador-left">keyboard_arrow_left</i>
            <ul class="slides">
              <li>
                <img src="<?php echo base_url();?>assets/img/wolf1.png"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="<?php echo base_url();?>assets/img/wolf2.png"> <!-- random image -->
                <div class="caption left-align">
                  <h3>Left Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="<?php echo base_url();?>assets/img/wolf3.png"> <!-- random image -->
                <div class="caption right-align">
                  <h3>Right Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="<?php echo base_url();?>assets/img/wolf4.png"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
          </div>
    </section>
    <!--Equipos-->
    <div class="center-align white-text titulo ">
        <h2>Equipos</h2>
    </div>
    <section class="fondo-equipos">
      <div class="container">
        <div class="row">
          <!--Card 1-->
          <div class="col s6 m4 equipo">
            <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="equipo-imagen">
          </div>
          <!--Card 2-->
          <div class="col s6 m4 equipo">
              <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="equipo-imagen">
          </div>
          <!--Card 3-->
          <div class="col s6 m4 equipo">
              <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="equipo-imagen">
          </div>
          <!--Card 4-->
          <div class="col s6 m4 equipo">
              <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="equipo-imagen">
          </div>
          <!--Card 5-->
          <div class="col s6 m4 equipo">
              <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="equipo-imagen">
          </div>
          <!--Card 6-->
          <div class="col s6 m4 equipo">
              <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="equipo-imagen">
          </div>
        </div>
      </div>
    </section>
    <!--Parocinadores-->
    <div class="center-align white-text titulos ">
        <h2>patrocinadores</h2>
    </div>
    <section class="fondo-equipos">
        <div class="container">
            <div class="row">
              <!--Card 1-->
              <div class="col s12 m4 equipo">
                <a href=""><img src="<?php echo base_url();?>assets/img/hyper.png" class="patrocinador-imagen"></a>
              </div>
              <!--Card 1-->
              <div class="col s12 m4 equipo">
                  <a href=""><img src="<?php echo base_url();?>assets/img/hyper.png" class="patrocinador-imagen"></a>
                </div>
                <!--Card 1-->
              <div class="col s12 m4 equipo">
                  <a href=""><img src="<?php echo base_url();?>assets/img/hyper.png" class="patrocinador-imagen"></a>
                </div>
            </div>
          </div>
    </section>
    <!--Afiliados-->
    <div class="center-align white-text titulos ">
      <h2>Afiliados</h2>
  </div>
  <section class="fondo-equipos">
    <div class="container">
      <div class="row">
        <!--Card 1-->
        <div class="col s6 m4 equipo">
          <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="afiliado-imagen">
        </div>
        <!--Card 2-->
        <div class="col s6 m4 equipo">
            <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="afiliado-imagen">
        </div>
        <!--Card 3-->
        <div class="col s6 m4 equipo">
            <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="afiliado-imagen">
        </div>
        <!--Card 4-->
        <div class="col s6 m4 equipo">
            <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="afiliado-imagen">
        </div>
      </div>
    </div>
  </section>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
  </body>
</html>