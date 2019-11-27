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
              <div class="row">
                    <?php foreach ($equipos as $list): ?> 
                    <img class="col m2 nav-equipos-drop" src="<?php echo base_url();?>assets/img/equipo/<?php echo $list->Logo;?>" alt="smash">
                    <?php endforeach ?>
              </div>
              </div>
            </div>
        </div>
      </nav>
    </div>

    <ul class="sidenav public" id="mobile-demo">
    <?php if($this->session->userdata('logged_in')!= "false") { echo '<a href="#modalini" class=" brand-logo iniciar_sesion hide-on-med-and-down modal-trigger">Iniciar sesión</a>';} ?>
      <a class="close sidenav-close" href="#"><i class="material-icons">close</i></a>
      <li><a href="index.html">Inicio</a></li>
      <ul class="collapsible">
        <li>
          <div class="collapsible-header white-text equipo_navbar">Equipos</div>
          <div class="collapsible-body navbar-equipos">
          
          </div>
        </li>
      </ul>
      <li><a href="/">Inicio</a></li>
                    <li><a href="<?= site_url('home/quienes'); ?>">Quienes somos</a></li>     
                    <li><a href="<?= site_url('home/'); ?>">Patrocinadores</a></li>
                    <li><a href="<?= site_url('home/'); ?>">Contactanos</a></li>
                    <li><a href="<?= site_url('home/'); ?>">Tienda</a></li>
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
  <!--Big hero-->
  <section>
    <div>
      <img class="big_hero-equipo" src="<?php echo base_url();?>assets/img/wolf2.png" alt="fondo">
      <h3 class="container white-text center-align titulo-equipos"><?php echo $equipo->Nombre;?></h3> 
      <img class="logo_hero" src = "<?php echo base_url();?>assets/img/equipo/<?php echo $equipo->Logo;?>" alt="logo">
     
    </div>
  </section>
  <!--Jugadores-->
  
  <div class="row separador_equipos">
      <div class="center-align white-text titulos ">
          <h2>Jugadores</h2>
      </div>
     <section class="section scrollspy" id="jugadores">
      <?php foreach ($jugador as $list): ?> 
        <div class="col s12 m6">
        <div class="card horizontal grey darken-4">
            <div class="card-image">
              <img class="jugador-img" src="<?php echo base_url();?>assets/img/jugador/<?php echo $list->Logo;?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title activator red-text card-text"><?php echo $list->Tag;?></span>
                <p class="white-text"><?php echo $equipo->Nombre;?></p>
              </div>
            </div>
          </div>
      </div>
      <?php endforeach ?>      
    </div>
    </div>
    </section>



  
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
  </body>
</html>