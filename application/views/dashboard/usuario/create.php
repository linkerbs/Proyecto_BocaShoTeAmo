<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"  media="screen,projection"/>
    <link type="stylesheet" rel="stylesheet" href="<?php echo base_url();?>assets/css/alertify.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width,   initial-scale=1.0"/>
  </head>

  <body>
    <!--Navbar-->
    <section> 
        <div class="navbar-fixed">
            <nav>
              <div class="nav-wrapper grey darken-4" >
                    <a  class="brand-logo left">
                        <div>
                            <div class="container_navbar">
                                Nuevo usuario
                            </div>
                        </div>
                    </a>               
              </div>
            </nav>
          </div>
    </section>
<!--Contenido-->
<section>
    <div class="container_sidenav">
      <div class="card grey darken-4 white-text">
      <?php echo form_open_multipart('usuario/store');?>
          <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="Nombre" id="first_name" type="text" class="validate white-text" name ="Nombres">
                <label for="first_name">Nombres</label>
            </div>

            <div class="input-field col s12 m6">
                <input placeholder="Correo" id="first_name" type="text" class="validate white-text" name ="Correo">
                <label for="first_name">Correo</label>
            </div>

            <div class="input-field col s12 m6">
                <input placeholder="Usuario" id="first_name" type="text" class="validate white-text" name ="Usuario">
                <label for="first_name">Usuario</label>
            </div>

            <div class="input-field col s12 m6 white-text">
                <select name ="Nivel" >
                    <option  value="" disabled selected>Tipo de usuario</option>
                    <option value="1">Administrador</option>
                    <option value="4">Cliente</option>
                </select>
                <label>Equipo</label>
            </div>

            <div class="input-field col s12 m12 white-text">
            <i class="material-icons prefix">lock</i>
             <input placeholder="" id="contra" type="password" class="validate" name ="ContraseÒa">
            <label for="contra">Contrase√±a</label>
          </div>
            
            <div>
                <div class="col s6 m6">
                    <a href="<?= site_url('usuario/'); ?>" class="waves-effect grey darken-3 btn left">Regresar</a>
                </div>
                <div class="col s6 m6">
                <button type="submit" value = "upload" class="btn btn-primary red darken-3 right">Aceptar</button>
                    <br><br>
                </div>
            </div>
              
        </form>

      </div>
    </div>
</section>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/tema.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/grafics.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/alertify.min.js"></script>
  </body>
</html>