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
                    <li><a href="<?php echo base_url();?>application/views/public/tineda.html">Tienda</a></li>
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

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
  </body>
</html>