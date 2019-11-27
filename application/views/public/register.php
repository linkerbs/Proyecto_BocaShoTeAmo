<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/materialize.min.css"  media="screen,projection"/>
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
          <a href="#modalini" class=" brand-logo iniciar_sesion hide-on-med-and-down modal-trigger">Iniciar sesión</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="large material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
          <li><a href="<?= site_url('home/'); ?>">Inicio</a></li>
                    <li class="dropequipos_trigger"><a  href=""><i class="material-icons right">arrow_drop_down</i>Equipos </a></li>
                    <li><a href="<?= site_url('home/quienes'); ?>">Quienes somos</a></li>     
                    <li><a href="<?= site_url('home/'); ?>">Patrocinadores</a></li>
                    <li><a href="<?= site_url('home/'); ?>">Contactanos</a></li>
                    <li><a href="<?= site_url('home/tienda'); ?>">Tienda</a></li>
            </ul>

        </div>
      </nav>
    </div>

   
      <li><a href="/">Inicio</a></li>
                    <li><a href="<?= site_url('home/quienes'); ?>">Quienes somos</a></li>     
                    <li><a href="<?= site_url('home/'); ?>">Patrocinadores</a></li>
                    <li><a href="<?= site_url('home/'); ?>">Contactanos</a></li>
                    <li><a href="<?= site_url('home/'); ?>">Tienda</a></li>
    </ul>
    

    <!--Formulario de registrer-->
    <section >

        <div class="container">
        <?php echo form_open_multipart('usuario/store_c');?>
                    <div class="row grey darken-3 z-depth-3">
                        <h2 class="card-text white-text center-align margin-registrate-arriba">Registrate</h2>
                        <div class="input-field col s12 m12 white-text">
                            <i class="material-icons prefix">person</i>
                            <input placeholder="Nombre" id="nombre" type="text" class="validate" name = "Nombres">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="input-field col s12 m12 white-text">
                            <i class="material-icons prefix">email</i>
                            <input placeholder="email" id="email" type="email" class="validate" name = "Correo">
                            <label for="email">example@gmail.com</label>
                        </div>
                        <div class="input-field col s12 m12 white-text">
                            <i class="material-icons prefix">person</i>
                            <input placeholder="Usuario" id="usuario" type="text" class="validate" name = "Usuario">
                            <label for="Usuario">Usuario</label>
                        </div>              
                        <div class="input-field col s12 m12 white-text">
                            <i class="material-icons prefix">lock</i>
                            <input placeholder="" id="contra" type="password" class="validate" name = "Contraseña"> 
                            <label for="contra">Contraseña</label>
                        </div>
                        <div class="col s12 m12 margin-registrate-abajo">
                            <a href="<?= site_url('home/'); ?>" class="waves-effect waves-light btn grey darken-4 white-text left">Regresar</a>
                            <button class="waves-effect waves-light btn red darken-3 white-text right">Aceptar</button>
                        </div>
                    </div>
            </form>
        </div>

    </section>
    


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/tema.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/grafics.js"></script>
  </body>
</html>