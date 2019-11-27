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
          <a href = "<?= site_url('home/'); ?>" class="brand-logo left"><img class="fondo_wolf"src="<?php echo base_url();?>assets/img/navbar.png" alt="wolf logo"></a>
          <!--Inicio parte escondida-->
          <a href="<?php echo base_url('index.php/home/view_carro/'.$this->session->userdata('Id'));?>" class="brand-logo center waves-effect waves-light white-text hide-on-large-only"><i class="material-icons right">shopping_cart</i>4</a>
          <!--Fin parte escondida-->
          <!--Inicio parte escondida-->
            <a class=" brand-logo iniciar_sesion hide-on-med-and-down hide"><?$this->session->userdata('Nombres')?></a>
          <!--Fin parte escondida-->
          <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="large material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <!--Inicio parte escondida-->
                <li><a href="<?php echo base_url('index.php/home/view_carro/'.$this->session->userdata('Id'));?>" class="waves-effect waves-light white-text"><i class="material-icons right">shopping_cart</i>4</a></li>
            <!--Fin parte escondida-->
            <li><a href="<?= site_url('/login/logout'); ?>" class="waves-effect waves-light white-text btn red darken-3"><i class="material-icons left white-text">arrow_back</i>Cerrar Sesion</a></li>
        </div>
      </nav>
    </div>
  
    <ul class="sidenav public" id="mobile-demo">
      <!--Inicio parte escondida-->
        <a href="<?= site_url('home/'); ?>" class="iniciar white-text hide"><?$this->session->userdata('Nombres')?></a>
      <!--Fin parte escondida-->
      <a class="close sidenav-close" href="#"><i class="material-icons">close</i></a>
      <li><a href="<?= site_url('/login/logout'); ?>" class=" white-text">Cerrar sesion</a></li> 
    </ul>
    <!-- Modal Structure -->
  </section>
  <!--Jugadores-->
  <section>
          <div class="container">
                <div class="input-field col s12 m12 margin-nav">
                    <input placeholder="Productos" id="first_name" type="text" class="validate">
                    <label for="first_name">Buscar</label>
                </div>
          </div>
            <div class="row">
                    <h2 class="card-text white-text center-align">Productos</h2>
                <?php foreach ($productos as $list) :?>
                <?php echo form_open_multipart('home/store_carro');?>
                <input id="prodId" name="Id_usuario" type="hidden" value="<?php echo $this->session->userdata('Id') ?>">
                <input id="prodId" name="Id_producto" type="hidden" value="<?php echo $list->Id?>">
                <input id="prodId" name="Precio" type="hidden" value="<?php echo $list->Precio?>">
                <div class="col s12 m12 l6">
                    <div class="card horizontal grey darken-4">
                        <div class="card-image">
                            <img class="jugador-img" src="<?php echo base_url();?>assets/img/producto/<?php echo $list->Logo?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <span class="card-title activator red-text card-text"><?php echo $list->Nombre?></span>   
                                <p class="white-text"><?php echo $list->Categoria ?></p>
                            </div>
                            <p class="range-field">   <h5 class="card-text white-text center-align">Cantidad</h5>
                            <input type="range" id="ranger" name="Cantidad" min="0" max="<?php echo $list->Cantidad?>" />
                            </p>
                            
                            <div class="card-action right-align">  
                                <span class="white-text left" name = "no" value = "<?php echo $list->Precio?>">$<?php echo $list->Precio?></span>
                                <button type="submit" class="modal-trigger waves-effect waves-light btn white-text red darken-3 hide-on-med-and-down"><i class="material-icons right">add_shopping_cart</i>Agregar</>
                               
                            </div>

                            
                        </div>
                    </div>
                </div>
                </form>
                <?php endforeach ?>
            </div>
        
        <!--MODAL DE DESCRIPCCION-->
        <!-- Modal Structure -->
    </section>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
  </body>
</html>