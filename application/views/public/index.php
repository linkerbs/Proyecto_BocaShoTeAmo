<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"  media="screen,projection"/>
    <link rel="stylesheet" href="stylesheet" href="<?php echo base_url();?>assets/css/alertify.min.css"  media="screen,projection"/>
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
                <h4 class="white-text modal-text">Iniciar sesión</h4>
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
                <button  type = "submit" class="modal-close red darken-2 waves-effect waves-white btn-flat white-text right">Iniciar sesión</button>
                <a href="#!" class="modal-close  waves-effect waves-red btn-flat white-text left">Regresar</a>
              </div>
            </form> 
            </div>
    </section>

    

    <!--Slider-->
    <section>
        <div class="slider">
            <i class="Medium material-icons indicador-right">keyboard_arrow_right</i>
            <i class="Medium material-icons indicador-left">keyboard_arrow_left</i>
            <ul class="slides">
            <?php foreach ($noticias as $list): ?> 
              <li>
                <img src="<?php echo base_url();?>assets/img/noticia/<?php echo $list->Logo;?>"> <!-- random image -->
                <div class="caption center-align">
                  <h3><?php echo $list->Titulo;?></h3>
                  <h5 class="light grey-text text-lighten-3"><?php echo $list->Subtitulo;?></h5>
                </div>
              </li>
              <?php endforeach ?>
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
          <?php foreach ($equipos as $list): ?> 
          <div class="col s6 m4 equipo">
           <a  href="<?php echo base_url('index.php/home/equipos/'.$list->Id)?>"><img src="<?php echo base_url();?>assets/img/equipo/<?php echo $list->Logo;?>" class="equipo-imagen">    
         
        </div>
        <?php endforeach ?>
      </div>
    </section>
    <!--Parocinadores-->
    <div class="center-align white-text titulos ">
        <h2>patrocinadores</h2>
    </div>
    <section class="fondo-equipos">
        <div class="container">
            <div class="row">
            <?php foreach ($patrocinadores as $list): ?> 
              <!--Card 1-->
              <div class="col s12 m4 equipo">
                <a href=""><img src= "<?php echo base_url();?>assets/img/patrocinador/<?php echo $list->Logo;?>"  class="patrocinador-imagen modal-trigger" href="#modal1"></a>
              
              <!-- Modal Structure -->
              <div id="modal1" class="modal grey darken-3 white-text">
                  <div class="modal-content">
                    <h4><?php echo $list->Nombre;?></h4>
                    <p>Orgulloso patrocinador</p>
                  </div>
                  <div class="modal-footer grey darken-4 ">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                  </div>
                </div>
              
                  
               
            </div>
            <?php endforeach ?>
          </div>
    </section>
    <!--Equipos-->
    <div class="center-align white-text titulos">
      <h2>Contactanos</h2>
    </div>
    <section class="fondo-equipos">
      <div class="container">
        <div class="row">
          <form class="col s12 m12">

              <div class="input-field col s12 m6">
                <input placeholder="example@gmail.com" id="first_name" type="email" class="validate forms_input">
                <label class="forms" for="first_name">Correo</label>
              </div>
              <div class="input-field col s12 m6">
                <input placeholder="Asunto" id="Asunto" type="text" class="validate forms_input">
                <label for="Asunto">Asunto</label>
              </div>
              <div class="input-field col s12" id="mensaje">
                <textarea placeholder="Mensaje" id="textarea1" class="materialize-textarea forms_input"></textarea>
                <label for="mensaje">Mensaje</label>
              </div>
              <div class="col s12 m12 right-align">
                <button class="btn waves-effect waves-light send" type="submit" name="action">Enviar</button>
              </div>
            
          </form>
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
          <?php foreach ($afiliados as $list): ?> 
          <div class="col s6 m4 equipo">
            <img src="<?php echo base_url();?>assets/img/afiliado/<?php echo $list->Logo?>" class="afiliado-imagen modal-trigger" href="">
          </div>
          <?php endforeach ?>
      </div>
      </div>
    </section>
    <!--footer-->
    <footer class="page-footer footer-arriba">
        <div class="footer-copyright footer-abajo">
          <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Desarrollado por Neon code</a>
          </div>
        </div>
      </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/alertify.min.js"></script>
    
  </body>
</html>