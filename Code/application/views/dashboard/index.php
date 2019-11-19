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
                                <li><a class="white-text" href="afiliados.html"><i class="material-icons white-text">event_note</i>Afiliados</a></li>
                            </ul>
                        </div>
                        </li>   
                        <li class="red darken-2">
                        <a class="waves-effect collapsible-header white-text"><i class="material-icons white-text">people</i>Equipos<i class="material-icons white-text right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey darken-4">
                            <ul>
                                <li><a class="white-text" href="equipos.html"><i class="material-icons white-text">perm_contact_calendar</i>Equipos</a></li>
                                <li><a class="white-text" href="jugadores.html"><i class="material-icons white-text">person_pin</i>Jugadores</a></li>
                            </ul>
                        </div>
                        </li>
                        <li class="red darken-3">
                        <a class="waves-effect  collapsible-header white-text"><i class="material-icons white-text">shopping_cart</i>Productos<i class="material-icons white-text right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey darken-4">
                            <ul>
                            <li><a class="white-text" href="categorias.html"><i class="material-icons white-text">shopping_basket</i>Categorias</a></li>
                            <li><a class="white-text" href="productos.html"><i class="material-icons white-text">add_shopping_cart</i>Productos</a></li>
                            </ul>
                        </div>
                        </li>
                    </ul>
                    <li><a href="noticias.html" class="waves-effect collapsible-header red darken-4  white-text"><i class="material-icons white-text">insert_chart</i>Noticias</a></li>
                    <li><a href="config.html" class="waves-effect collapsible-header red accent-4  white-text"><i class="material-icons white-text">account_circle</i>Configuracion</a></li>
                    </ul>
    </section>
   <!--Contenido-->
    <section>
      <div class="sidenav_space">
        <div class="container_sidenav">
          <!--Grafico-->
          <div id="grafico1" class="grafico"></div>
          <!--fin del grafico-->
          <div class="card grey darken-4 white-text">
            <h3 class="center-align">Historial de ventas</h3>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12 m12 si">
                  <i class="material-icons prefix">search</i>
                  <input placeholder="Example@gmail.com" id="first_name" type="text" class="validate white-text">
                  <label for="first_name">Buscar por correo</label>
                </div>
              </div>
            </form>
            <table >
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Correo</th>
                    <th>Total</th>
                    <th>Opciones</th>
                </tr>
              </thead>
      
              <tbody>
                <tr>
                  <td>1</td>
                  <td>carlos@gimail</td>
                  <td>$10.00</td>
                  <td>
                      <i class="material-icons yellow-text modal-trigger" href="#modal1">remove_red_eye</i>
                      <i class="material-icons red-text">delete</i>
                  </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>carlos@gimail</td>
                    <td>$10.00</td>
                    <td>
                        <i class="material-icons yellow-text modal-trigger" href="#modal1">remove_red_eye</i>
                        <i class="material-icons red-text">delete</i>
                    </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>carlos@gimail</td>
                      <td>$10.00</td>
                      <td>
                          <i class="material-icons yellow-text modal-trigger" href="#modal1">remove_red_eye</i>
                          <i class="material-icons red-text">delete</i>
                      </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>carlos@gimail</td>
                        <td>$10.00</td>
                        <td>
                            <i class="material-icons yellow-text modal-trigger" href="#modal1">remove_red_eye</i>
                            <i class="material-icons red-text">delete</i>
                        </td>
                      </tr>
                <tr>
                    <td>1</td>
                    <td>carlos@gimail</td>
                    <td>$10.00</td>
                    <td>
                        <i class="material-icons yellow-text modal-trigger" href="#modal1">remove_red_eye</i>
                        <i class="material-icons red-text">delete</i>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>carlos@gimail</td>
                    <td>$10.00</td>
                    <td>
                        <i class="material-icons yellow-text modal-trigger" href="#modal1">remove_red_eye</i>
                        <i class="material-icons red-text">delete</i>
                    </td>
                </tr>
              </tbody>
            </table>

          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content grey darken-3">
              <h4>Lista de compra con id: 1</h4>
              <p>
                <ul>
                    <table>
                        <thead>
                          <tr>
                              <th>Producto</th>
                              <th>Cantidad</th>
                              <th>Precio</th>
                              <th>Total</th>
                              <th>Opciones</th>
                          </tr>
                        </thead>
                
                        <tbody>
                          <tr>
                            <td>Tasa</td>
                            <td>2</td>
                            <td>$5.00</td>
                            <td>$10.00</td>
                            <td>
                                <i class="material-icons red-text">delete</i>
                            </td>
                          </tr>
                </ul>
              </p>
            </div>
          </div>

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
    
  </body>
</html>