<?php
include ('header.php');

if(!isset($_SESSION['rol'])){
  header('Location: '.'index.php');
} else {
  if($_SESSION['rol'] == 'usuario' ){
    header('Location: '.'logout.php');
  }else if($_SESSION['rol'] == 'socio') {
    include ('socio.php');
  }else{
?>
<div id="solicitudes" class="right_col" role="main">
  <div class="row">
    <div class="col-lg-12">
      <section class="x_panel">
        <div class="x_title">
          <h2>Registrar usuario</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <form id="registerSocio-admin" enctype="multipart/form-data" method="post">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                Nombre del Negocio
              </div>
              <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                <input id="nameNegocio" type="text" class="form-control" placeholder="Nombre Negocio" name="nameBussiness" value="">
                <div class="clear"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                Nombre del Socio
            </div>
              <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                <input id="nameSocio" type="text" class="form-control" placeholder="Nombre Representante" name="nameSocio" value="">
                <div class="clear"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                Telefono
              </div>
              <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                <input id="telSocio" type="text" class="form-control" placeholder="Teléfono" name="telSocio" value="">
                <div class="clear"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                Correo
              </div>
              <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                <input id="mailSocio" type="text" class="form-control" placeholder="Correo" name="mailSocio" value="">
                <div class="clear"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                Categoría
              </div>
              <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                <select id="category" name="category" class="form-control" >
                </select>
                <div class="clear"></div>
              </div>
            </div>
            <div class="clear"></div>
            <div>
              <button type="button" id="createSoc" class="btn bgGreen cWhite s20 text-center noTransform boxShadow pull-right">
                Crear cuenta
              </button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
</div>
<?php }}include ('footer.php'); ?>
