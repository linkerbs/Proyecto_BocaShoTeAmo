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
    <meta name="viewport" content="width=device-width,   initial-scale=1.0"/>
  </head>

  <body>
    <!--Navbar-->
    <section> 
        <div class="navbar-fixed">
            <nav>
              <div class="nav-wrapper grey darken-4" >
                <a  class="brand-logo left"><div class="sidenav_space">
                  <div class="container_navbar ">
                    Patrocinadores
                    <a  href="<?= site_url('/login/logout'); ?>" class="waves-effect waves-light btn red darken-3 white-text right margin-cerrar"><i class="material-icons left">arrow_back</i>Cerrar sesion</a>
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
                    <li><a href="<?= site_url('dashboard/config/'); ?>" class="waves-effect collapsible-header red accent-4  white-text"><i class="material-icons white-text">account_circle</i>Configuracion</a></li>
                    </ul>
    </section>
  <!--Contenido-->
  <section>
    <div class="sidenav_space">
      <div class="container_sidenav">
        <div class="card grey darken-4 white-text">
          <h3 class="center-align">Lista de patrocinadores</h3>
          <form class="col s12">
            <div class="row container_buscador">
              <div class="input-field col s9 m10 ">
                <i class="material-icons prefix">search</i>
                <input placeholder="Nombre" id="first_name" type="text" class="validate white-text">
                <label for="first_name">Buscar por nombre</label>
              </div>
              <div class="col s3 m2">
                  <a href="<?= site_url('/patrocinador/create'); ?>" class="waves-effect red darken-2 btn botton-abajo"><i class="material-icons">add</i></a>
              </div>
            </div>
          </form>
          <table class="responsive-table">
            <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Imagen</th>
                  <th>Redes</th>
                  <th>Opciones</th>
              </tr>
            </thead>
    
            <tbody>
            <?php foreach ($data as $list): ?>
              <tr>
                  <tr>
                      <td><?php echo $list->Nombre; ?></td>
                      <td><img class="img_logo" src="<?php echo base_url();?>assets/img/patrocinador/<?php echo $list->Logo; ?>" alt="logo"></td>
                      <td>
                          <a class="waves-effect  btn red darken-3 modal-trigger" href="#modal2">Redes</a>
                      </td>
                      <td>
                      <form method="DELETE" action="<?php echo base_url('index.php/patrocinador/delete/'.$list->Id);?>">
                       <a href="<?php echo base_url('index.php/patrocinador/edit/'.$list->Id)?>"><i class="material-icons blue-text">edit</i></a>
                       <button type="submit" class="btn btn-danger btn-xs"><i class="material-icons">delete</i></button>
                      </form>            
                      </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table> 
          <p><?php echo $links; ?></p>

        <!-- Modal Structure 2-->
        <div id="modal2" class="modal">
            <div class="modal-content grey darken-3">
              <h4>Redes Sociales</h4>
              <p>
                <ul>
                    <div class="row">
                        <form class="col s12">
                            <div class="col s12 m12">
                                Agregar una red
                            </div>
                            <div class="input-field col s12 m12" >
                                <input placeholder="Nombre" id="patro2" type="text" class="validate">
                            </div>
                            <div class="input-field col s12 m12" >
                                <input placeholder="URL" id="patro2" type="text" class="validate">
                            </div>

                            <div class="col s12 m12 right-align">
                                <a class="waves-effect waves-light btn red darken-3"><i class="material-icons">add</i></a>
                            </div>

                              
                          <table>
                            <thead>
                              <tr>
                                <th>Red</th>
                                <th>Accion</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                    <div class="input-field ">
                                        <input placeholder="www.Facebook.com" id="first_name" type="text" class="validate">
                                        <label for="first_name">Facebook</label>
                                    </div>
                                </td>
                                <td>
                                    <div >
                                        <a class="waves-effect waves-light btn red darken-3"><i class="material-icons">delete</i></a>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    <div class="input-field ">
                                        <input placeholder="www.Instagram.com" id="first_name" type="text" class="validate">
                                        <label for="first_name">Instagram</label>
                                    </div>
                                </td>
                                <td>
                                    <div >
                                        <a class="waves-effect waves-light btn red darken-3"><i class="material-icons">delete</i></a>
                                    </div>
                                </td>
                              </tr>
                              

                                
                            </tbody>
                          </table>
                        </form>
                      </div>
                </ul>
              </p>
            </div>
            <div class="modal-footer grey darken-4">
                <a href="#!" class="modal-close waves-effect red darken-3 white-text btn-flat">Modificar</a>
              </div>
          </div>
          <!--Final del modal-->
        </div>
      </div>
    </div>
  </section>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/tema.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/grafics.js"></script>
</html>