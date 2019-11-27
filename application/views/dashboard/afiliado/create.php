<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"  media="screen,projection"/>
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
                        <div class="container_navbar">
                            Nuevo afiliado
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
          <div class="row">
                <div class="col s12 m12 white-text red darken-2 ">
                    <div class="mensaje-advertencia"><i class="material-icons left">warning</i> Las redes se agregaran despues en el apartado de afiliados</div>
                </div>
          </div>
          <?php echo form_open_multipart('afiliado/store');?>
          <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="Nombre" id="first_name" type="text" class="validate white-text" name = "Nombre">
                <label for="first_name">Afiliado</label>
            </div>

            <div class="file-field input-field col s12 m6">
                    <div class="btn red darken-3">
                    <span>Imagen</span>
                    <input type="file" name="Logo" size="20" />
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            
            <div>
                <div class="col s6 m6">
                    <a href="<?= site_url('afiliado/'); ?>" class="waves-effect grey darken-3 btn left">Regresar</a>
                </div>
                <div class="col s6 m6">
                <button type="submit" value = "upload" class="btn btn-primary">Aceptar</button>
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
</body>
</html>