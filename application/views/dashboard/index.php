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
    <meta name="viewport" content="width=device-width,   initial-scale=1.0"/>
  </head>

  <body class="dashboard">  
       <!--Navbar-->
    <section>
            <div class="navbar-fixed">
                <nav>
                  <div class="nav-wrapper grey darken-4" >
                    <a  class="brand-logo left"><div class="sidenav_space">
                      <div class="container_navbar ">
                        Ventas
                      </div>
                    </div></a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="large material-icons">menu</i></a>                   
                  </div>
                </nav>
              </div>
    </section>
    <!--Sidenav-->
    <section>
            <ul id="slide-out" class="sidenav sidenav-fixed dashboard">
                    <li><div class="user-view">
                      <div class="background">
                        <img src="<?php echo base_url();?>assets/img/wolf3.png" class="responsive-img">
                      </div>
                      <a href="#name"><span class="white-text name">John Doe</span></a>
                      <a href="#email"><span class="white-text email">Administrador</span></a>
                    </div></li>
                    <div>
                    <li><a href="index.html" class="waves-effect collapsible-header red  white-text"><i class="material-icons white-text">attach_money</i>Ventas</a></li>
                    <ul class="collapsible collapsible-accordion">
                        <li class="red darken-1">
                        <a class="waves-effect collapsible-header white-text"><i class="material-icons white-text">business_center</i>Patrons<i class="material-icons white-text right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey darken-4">
                            <ul>
                                <li><a class="white-text" href="<?= site_url('patrocinador/'); ?>"><i class="material-icons white-text">business</i>Patrocinadores</a></li>
                                <li><a class="white-text" href="<?= site_url('afiliado/'); ?>"><i class="material-icons white-text">event_note</i>Afiliados</a></li>
                            </ul>
                        </div>
                        </li>   
                        <li class="red darken-2">
                        <a class="waves-effect collapsible-header white-text"><i class="material-icons white-text">people</i>Equipos<i class="material-icons white-text right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey darken-4">
                            <ul>
                                <li><a class="white-text" href="<?= site_url('equipo/'); ?>"><i class="material-icons white-text">perm_contact_calendar</i>Equipos</a></li>
                                <li><a class="white-text" href="<?= site_url('jugador/'); ?>"><i class="material-icons white-text">person_pin</i>Jugadores</a></li>
                            </ul>
                        </div>
                        </li>
                        <li class="red darken-3">
                        <a class="waves-effect  collapsible-header white-text"><i class="material-icons white-text">shopping_cart</i>Productos<i class="material-icons white-text right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey darken-4">
                            <ul>
                          
                            <li><a class="white-text" href="<?= site_url('producto/'); ?>"><i class="material-icons white-text">add_shopping_cart</i>Productos</a></li>
                            </ul>
                        </div>
                        </li>
                    </ul>
                    <li><a href="<?= site_url('noticia/'); ?>" class="waves-effect collapsible-header red darken-4  white-text"><i class="material-icons white-text">insert_chart</i>Noticias</a></li>
                    <li><a href="<?= site_url('usuario/'); ?>" class="waves-effect collapsible-header red darken-4  white-text"><i class="material-icons white-text">assignment_ind</i>Usuarios</a></li>
                    <li><a href="<?= site_url('dashboard/config'); ?>" class="waves-effect collapsible-header red accent-4  white-text"><i class="material-icons white-text">account_circle</i>Configuracion</a></li>
                    </ul>
    </section>
   <!--Contenido-->
    <section>
      <div class="sidenav_space">
      <div class="container_sidenav">
      <h2 class="card-text center white-text">Bienvenido a Wolfpack admin</h2>
      <h3 class="card-text center white-text">- Seleccione cualquier opción para administrar -</h3>
      </div>
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