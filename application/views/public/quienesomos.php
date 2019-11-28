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
                <a  class="brand-logo left"><img class="fondo_wolf"src="<?php echo base_url();?>assets/img/navbar.png" alt="wolf logo"></a>
                <?php if($this->session->userdata('logged_in')!= "false") { echo '<a href="#modalini" class=" brand-logo iniciar_sesion hide-on-med-and-down modal-trigger">Iniciar sesión</a>';} ?>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="large material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= site_url('home/'); ?>">Inicio</a></li>
                    <li class="dropequipos_trigger"><a  href=""><i class="material-icons right">arrow_drop_down</i>Equipos </a></li>
                    <li><a href="<?= site_url('home/quienes'); ?>">Quienes somos</a></li>     
                    <li><a href="<?= site_url('home/'); ?>">Patrocinadores</a></li>
                    <li><a href="<?= site_url('home/'); ?>">Contactanos</a></li>
                    <li><a href="<?= site_url('home/tienda'); ?>">Tienda</a></li>
                  </ul>
                  <div class="dropequipos">
                    <div class="row">
                    <?php foreach ($equipos as $list): ?> 
                    <img class="col m2 nav-equipos-drop" src="<?php echo base_url();?>assets/img/equipo/<?php echo $list->Logo;?>" alt="smash">
                    <?php endforeach ?>
                    </div>
                  </div>
              </div>
            </nav>
          </div>
    
          <ul class="sidenav public" id="mobile-demo">
          <?php if($this->session->userdata('logged_in')!= "false") { echo '<a href="#modalini" class="iniciar modal-trigger">Iniciar sesión</a>';} ?>
            <a class="close sidenav-close" href="#"><i class="material-icons">close</i></a>
            
            <ul class="collapsible">
              <li>
                </div>
              </li>
            </ul>
            <li><a href="<?= site_url('home/'); ?>">Inicio</a></li>
            <li><a href="<?= site_url('home/quienes'); ?>">Quienes somos</a></li>     
            <li><a href="<?= site_url('home/'); ?>">Patrocinadores</a></li>
            <li><a href="<?= site_url('home/'); ?>">Contactanos</a></li>
            <li><a href="<?= site_url('home/tienda'); ?>">Tienda</a></li>
          </ul>
        <!-- Modal Structure -->
        <div id="modalini" class="modal">
              <div class="modal-content grey darken-3">
                <h4 class="white-text modal-text">Iniciar seción</h4>
                <form class="col s12" action="<?php echo site_url('login/auth');?>" method="post">
                    <div class="row">
                      <div class="input-field col s12 m12">
                        <input placeholder="example@gmail.com" id="usu" type="text" class="validate white-text name" name = "Usuario">
                        <label for="usu"  class="white-text">Usuario</label>
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12">
                          <input placeholder="Password" id="pas" type="password" class="validate white-text" name = "Contraseña">
                          <label for="pas" class="white-text">Contraseña</label>
                        </div>
                    </div>
                        <span class="white-text">¿No tienes cuenta? <a class="carmesi-text" href="<?= site_url('home/register'); ?>"><b>Registrate</b></a></span>
                
              </div>
              <div class="modal-footer grey darken-4">
                <button type = "submit" class="modal-close red darken-2 waves-effect waves-white btn-flat white-text right">Iniciar sesión</button>
                <a href="#!" class="modal-close  waves-effect waves-red btn-flat white-text left">Regresar</a>
              </div>
            </form> 
            </div>
    </section>

    <!--redes-->
    <section>
        <div class="quienes-inicio">
          <div class="row">
            <div class="col s12 m12 ">
              <img class="quienes-fotos" src="<?php echo base_url();?>assets/img/wolfHD.png" alt="logo">
            </div>
            <div class="col s12 m12 grey darken-4">
              <ul class="contenedor-redes margin-redes">
                <li><a target="blank" href="https://www.facebook.com/WolfPackSV"><img src="<?php echo base_url();?>assets/img/face_logo.png" alt="smash" class="redes"></a>></li>
                <li><a target="blank" href="https://www.instagram.com/wolfpacksv/"><img src="<?php echo base_url();?>assets/img/insta_logo.png" alt="smash" class="redes"></a></li>
                <li><a target="blank" href="https://www.youtube.com/channel/UCrR25x-QJf5jpqzqx5e6zxQ/"><img src="<?php echo base_url();?>assets/img/tube_logo.png" alt="smash" class="redes"></a></li>
              </ul>
            </div>
          </div>
        </div>
    </section>
    <!--video-->
    <section>
        <div class="center-align white-text titulos">
            <h2>Quienes somos</h2>
        </div>
      <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/AtVt5DUl-CQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <br><br>
    </section>
    <!--parrafos-->
    <div class="row grey darken-4 valores">
      <div class="col s12 m4">
          <h2 class="center-align white-text titulos-valores">Mision</h2>
          <p class="quienes-parrafo">“Promover los Deportes electrónicos locales y regionales a través de la participación en ambas categorías de competencias, apoyando el talento de los jóvenes sobresalientes en los deportes electrónicos.”</p>
      </div>
      <div class="col s12 m4">
          <h2 class="center-align white-text titulos-valores">Vision</h2>
          <p class="quienes-parrafo">“Buscamos ser una de las organizaciones de deportes electrónicos más prominentes de la región centroamericana mediante la integra preparación de los competidores para ayudarlos a desarrollar competencia y aptitud e impulsar su talento en las distintas divisiones donde se desarrollen en categorías locales y regionales y de esta forma posicionarnos como una de las organizaciones regionales de mejor categoría”</p>
      </div>
      <div class="col s12 m4">
          <h2 class="center-align white-text titulos-valores">Valores</h2>
          <p class="quienes-parrafo">"Creemos fervientemente en la necesidad de la preparación de nuestros jugadores para que puedan destacar en todos los aspectos de su desarrollo personal en la duración de su estadía en nuestra organización, maximizando de esta forma el potencial del equipo en conjunto, pero a su vez de los individuos como potenciales iconos del deporte electrónico en nuestra localidad"</p>
      </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
  </body>
</html>