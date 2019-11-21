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
                <a href="#modalini" class=" brand-logo iniciar_sesion hide-on-med-and-down modal-trigger">Iniciar sesión</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="large material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="dropequipos_trigger"><a  href="index.html#equipo"><i class="material-icons right">arrow_drop_down</i>Equipos </a></li>
                    <li><a href="<?= site_url('home/quienes'); ?>">Quienes somos</a></li>     
                    <li><a href="<?= site_url('home/'); ?>">Patrocinadores</a></li>
                    <li><a href="<?= site_url('home/'); ?>">Contactanos</a></li>
                    <li><a href="<?= site_url('home/'); ?>">Tienda</a></li>
                  </ul>
                  <div class="dropequipos">
                    <div class="row">
                      <img class="col m2 nav-equipos-drop" src="<?php echo base_url();?>assets/img/smash blanco.png" alt="smash">
                      <img class="col m2 nav-equipos-drop" src="<?php echo base_url();?>assets/img/smash blanco.png" alt="smash">
                      <img class="col m2 nav-equipos-drop" src="<?php echo base_url();?>assets/img/smash blanco.png" alt="smash">
                      <img class="col m2 nav-equipos-drop" src="<?php echo base_url();?>assets/img/smash blanco.png" alt="smash">
                      <img class="col m2 nav-equipos-drop" src="<?php echo base_url();?>assets/img/smash blanco.png" alt="smash">
                      <img class="col m2 nav-equipos-drop" src="<?php echo base_url();?>assets/img/smash blanco.png" alt="smash">
                    </div>
                  </div>
              </div>
            </nav>
          </div>
    
          <ul class="sidenav" id="mobile-demo">
            <a class="iniciar modal-trigger" href="#modalini">Iniciar sesión</a>
            <a class="close sidenav-close" href="#"><i class="material-icons">close</i></a>
            <li><a href="<?php echo base_url();?>application/views/public/index.html">Inicio</a></li>
            <ul class="collapsible">
              <li>
                <div class="collapsible-header white-text equipo_navbar">Equipos</div>
                <div class="collapsible-body navbar-equipos">
                  <ul >
                    <li><a href="">EQUIPO 1</a></li>
                    <li><a href="">EQUIPO 2</a></li>
                    <li><a href="">EQUIPO 3</a></li>
                    <li><a href="">EQUIPO 4</a></li> 
                  </ul>
                </div>
              </li>
            </ul>
            <li><a href="<?php echo base_url();?>application/views/public/quienesomos.html">Quienes somos</a></li>     
            <li><a href="<?php echo base_url();?>application/views/public/index.html#patrocinador">Patrocinadores</a></li>
            <li><a href="<?php echo base_url();?>application/views/public/index.html#contactanos">Contactanos</a></li>
            <li><a href="<?php echo base_url();?>application/views/public/tienda.html">Tienda</a></li>
          </ul>
          <!-- Modal Structure -->
          <div id="modalini" class="modal">
              <div class="modal-content grey darken-3">
                <h4 class="white-text modal-text">Iniciar seción</h4>
                <form class="col s12">
                    <div class="row">
                      <div class="input-field col s12 m12">
                        <input placeholder="example@gmail.com" id="usu" type="text" class="validate white-text">
                        <label for="usu"  class="white-text">Correo o telefono</label>
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12">
                          <input placeholder="Password" id="pas" type="password" class="validate white-text">
                          <label for="pas" class="white-text">Password</label>
                        </div>
                    </div>
                        <span class="white-text">¿No tienes cuenta? <a class="carmesi-text" href="register.html"><b>Registrate</b></a></span>
                
              </div>
              <div class="modal-footer grey darken-4">
                <a href="#!" class="modal-close red darken-2 waves-effect waves-white btn-flat white-text right">Iniciar sesión</a>
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
                <a href=""><img src="<?php echo base_url();?>assets/img/hyper.png"  class="patrocinador-imagen modal-trigger" href="#modal1"></a>
              </div>
              <!--Card 1-->
              <div class="col s12 m4 equipo">
                  <a href=""><img src="<?php echo base_url();?>assets/img/hyper.png" class="patrocinador-imagen modal-trigger" href="#modal2"></a>
              </div>
              <!--Card 1-->
              <div class="col s12 m4 equipo">
                  <a href=""><img src="<?php echo base_url();?>assets/img/hyper.png" class="patrocinador-imagen modal-trigger" href="#modal3"></a>
              </div>
              <!-- Modal Structure -->
              <div id="modal1" class="modal grey darken-3 white-text">
                  <div class="modal-content">
                    <h4>Modal Header 1</h4>
                    <p>A bunch of text</p>
                  </div>
                  <div class="modal-footer grey darken-4 ">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                  </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal2" class="modal grey darken-3 white-text">
                    <div class="modal-content">
                      <h4>Modal Header 2</h4>
                      <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer grey darken-4 ">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                    </div>
                  </div>
                  <!-- Modal Structure -->
                <div id="modal3" class="modal grey darken-3 white-text">
                    <div class="modal-content">
                      <h4>Modal Header 3</h4>
                      <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer grey darken-4 ">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                    </div>
                  </div>
            </div>
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
          <div class="col s6 m4 equipo">
            <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="afiliado-imagen modal-trigger" href="#modal4">
          </div>
          <!--Card 2-->
          <div class="col s6 m4 equipo">
              <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="afiliado-imagen modal-trigger" href="#modal5">
          </div>
          <!--Card 3-->
          <div class="col s6 m4 equipo">
              <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="afiliado-imagen modal-trigger" href="#modal6">
          </div>
          <!--Card 4-->
          <div class="col s6 m4 equipo">
              <img src="<?php echo base_url();?>assets/img/smash blanco.png" class="afiliado-imagen modal-trigger" href="#modal7">
          </div>
           <!-- Modal Structure -->
           <div id="modal4" class="modal grey darken-3 white-text">
              <div class="modal-content">
                <h4>Modal Header 4</h4>
                <p>A bunch of text</p>
              </div>
              <div class="modal-footer grey darken-4 ">
                <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
              </div>
            </div>
            <!-- Modal Structure -->
            <div id="modal5" class="modal grey darken-3 white-text">
                <div class="modal-content">
                  <h4>Modal Header 5</h4>
                  <p>A bunch of text</p>
                </div>
                <div class="modal-footer grey darken-4 ">
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                </div>
              </div>
              <!-- Modal Structure -->
            <div id="modal6" class="modal grey darken-3 white-text">
                <div class="modal-content">
                  <h4>Modal Header 6</h4>
                  <p>A bunch of text</p>
                </div>
                <div class="modal-footer grey darken-4 ">
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                </div>
              </div>
              <!-- Modal Structure -->
            <div id="modal7" class="modal grey darken-3 white-text">
                <div class="modal-content">
                  <h4>Modal Header 7</h4>
                  <p>A bunch of text</p>
                </div>
                <div class="modal-footer grey darken-4 ">
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                  <a href="#!" class="modal-close waves-effect waves-red btn-flat white-text"><i class="material-icons">image</i></a>
                </div>
              </div>
        </div>
      </div>
    </section>
    <!--footer-->
    <footer class="page-footer footer-arriba">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Footer Content</h5>
              <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
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
  </body>
</html>