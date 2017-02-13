<?php
include ('header.php');
//autoloader para cargar clases
//require_once(__DIR__.'/../classes/autoloader.php');
//require_once(__DIR__.'/../config.php');

//invocacion de clases
use pdomysql AS pdomysql;
use user AS user;

if(!isset($_SESSION['rol'])){
  header('Location: '.'index.php');
} else {
  if($_SESSION['rol'] == 'usuario' ){
    header('Location: '.'logout.php');
  }
}
?> 
<style type="text/css">

</style>    
<div id="perfil_socio" class="right_col" role="main" onload="initMap()">
  <div class="z-row">
    <div class="col-xs-12">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <div class="x_panel">
          <div class="x_title">
            <ul id="myTab" class="nav nav-tabs " role="tablist">
              <li role="presentation" ><a href="#tab_datos" id="datos-tab" role="tab" data-toggle="tab" aria-expanded="true">Perfil y Contacto</a>
              </li>
              <li role="presentation" class=""><a href="#tab_imagenPerfil" role="tab" id="imagenPerfil-tab" data-toggle="tab" aria-expanded="false">Imagen de Perfil</a>
              </li>
              <li role="presentation" class=""><a href="#tab_direcciones" role="tab" id="direcciones-tab" data-toggle="tab" aria-expanded="false">Direcciones</a>
              </li>
              <li role="presentation" class=""><a href="#tab_acceso" role="tab" id="acceso-tab" data-toggle="tab" aria-expanded="false">Cuenta</a>
              </li>
              <li role="presentation" class="active"><a href="#tab_galeria" role="tab" id="acceso-tab" data-toggle="tab" aria-expanded="false">Galeria de Imagenes </a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade " id="tab_datos" aria-labelledby="datos-tab">
              <div class="x_content">
                <form id="editProfileF"><!--action="editPpicture.php" method="post" enctype="multipart/form-data"-->
                  <div class="form-section">
                    <label for="nameP">Nombre de contacto</label>
                    <input id="nameP" type="text" class="form-control" placeholder="Nombre completo" name="nameP" value="<?php echo $profile[0]['name'] ?>" required>
                    <div class="clear"></div>
                  </div>
                  <div class="form-section">
                    <label for="phoneP">Telefono</label>
                    <input id="phoneP" type="text" class="form-control" placeholder="Telefono" name="phoneP" value="<?php echo $profile[0]['number'] ?>" required>
                    <div class="clear"></div>
                  </div>
                  <div class="form-section">
                    <label for="emailP">Correo</label>
                    <input id="emailP" type="email" class="form-control" placeholder="E-mail" name="emailP" value="<?php echo $profile[0]['mail'] ?>" required>
                    <div class="clear"></div>
                  </div>
                  <div class="form-section">
                    <label for="negocioP">Nombre del negocio</label>
                    <input id="negocioP" type="text" class="form-control" placeholder="Nombre" name="negocioP" value="<?php echo $profile[0]['negocio'] ?>" required>
                    <div class="clear"></div>
                  </div>
                  <button type="button" id="editProfile" class="btn bgGreen cWhite pull-right" >
                    Guardar cambios
                  </button>
                </form>
              </div>
              <hr>
              <div class="x_content">
                <form class="" method="post">
                  <div class="form-section">
                    <input type="hidden" id="userID" name="userID" value="<?= $profile['0']['iduser']?>">
                    <label for="usernameP">Usuario</label>
                    <input id="usernameP" type="text" class="form-control" placeholder="username" name="usernameP" value="<?php echo $profile[0]['username'] ?>" required>
                    <div class="clear"></div>
                  </div>
                 <!-- <div class="form-section">
                    <label for="emailP"></label>
                    <input id="emailP" type="text" class="form-control" placeholder="E-mail" name="emailP" value="<?php echo $profile[0]['mail'] ?>" required>
                    <div class="clear"></div>
                  </div>-->
                  <button type="button" id="editProfileUser" class="btn bgGreen cWhite pull-right" >
                    Guardar cambios
                  </button>
                </form>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane fade in " id="tab_imagenPerfil" aria-labelledby="imagenPerfil-tab">
              <div class="x_content">
                <?php 
                $directory = "../imagenes_/profPicture/".$_SESSION['iduser']."/";
                if (!file_exists($directory)) {
                  mkdir($directory, 0777,true);
                }


                $db_con = new PDOMYSQL;
                $cosultaImages="SELECT img from user_data where user_id = ?";
                $parametros = array($_SESSION['iduser']);
                $result =  $db_con->consultaSegura($cosultaImages,$parametros);
                //error_log(json_encode($result[0]['img']));
                //error_log(json_encode($images));
                $image = "../imagenes_/profPicture/".$result[0]['img'];
                //error_log(json_encode($images));
                ?>
                <h1>Subir su imagen de Perfil </h1>
                <hr>

                <div class="file-preview-frame file-preview-initial file-sortable kv-preview-thumb" id="preview-1485101766037-init_0" data-fileindex="init_0" data-template="image">
                  <div class="kv-file-content">
                    <img id="previewProfileImage" src="<?php echo $image; ?>" height="120px" class="file-preview-image">
                  </div>
                </div>
                <div class="clearfix"></div>
                <form id="formProfileimage" class="form-section" enctype="multipart/form-data">
                  <div class="clear"></div>
                  <label for="fileImage">
                    <span type="span"  class="btn btn-info cWhite s20 text-center noTransform boxShadow pull-right" name="span">Buscar Imagen</span>
                  </label>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                      <input type="file" id="fileImage" name="fileImage" class="form-control" accept="image/*">
                    </div>
                  </div>
                  <div class="clear"></div>
                  <button type="submit" id="fileUpload" class="btn btn-success cWhite s20 text-center noTransform boxShadow pull-right" name="button">Subir Imagen</button>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_acceso" aria-labelledby="acceso-tab">
              <div class="x_content">
                <form class="" action="">
                  <div class="form-section">
                    <label for="oldPassP">Contraseña Actual</label>
                    <input id="oldPassP" type="password" class="form-control" placeholder="" name="oldPassP" value="">
                    <div class="clear"></div>
                  </div>
                  <div class="form-section">
                    <label for="newPassP">Contraseña Nueva</label>
                    <input id="newPassP" type="password" class="form-control" placeholder="" name="newPassP" value="" required>
                    <div class="clear"></div>
                  </div>
                  <button type="button" id="changeAccess" class="btn bgGreen cWhite pull-right" >
                    Guardar cambios
                  </button>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_direcciones" aria-labelledby="datos-tab">
              <div class="x_content">
                <div class="x_title">
                  <h2>Lista de Direcciones</h2><button id="btnAddAddress" title="Añadir una nueva direccion" class="btn bgGreen cWhite pull-right fa fa-plus btnPlus"></button>
                  <div class="clearfix"></div>
                </div>
                <table id="tableDir" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Direccion</th>
                      <th>Colonia</th>
                      <th>Municipio</th>
                      <th>Estado</th>
                      <th>Pais</th>
                      <th>C.P.</th>
                      <th>Latitud</th>
                      <th>Longitud</th>
                      <th>Editar</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade active in" id="tab_galeria" aria-labelledby="galeria-tab">
              <div class="x_content">
                <h1>Subir su imagenes a la Galeria </h1>
                <hr>
                <?php 
                $imagenes=posts::getImages($_SESSION['iduser']);
                $num= count($imagenes);
                /*echo $num;*/
            //var_dump($imagenes);
            /*foreach ($imagenes as $i => $val) {
              var_dump($imagenes[$i]);
            }*/
            ?>
            <div class="galeria-container">
              <div class="owl-carousel owl-theme">
                <?php
                foreach ($imagenes as $i => $val) {
                  ?>
                  <div class="item"><img class="owl-lazy" 
                    data-src="../imagenes_/galeria/<?php echo $imagenes[$i]['name'];   ?>" alt="<?php echo $imagenes[$i]['description']; ?>">
                    <div class="eliminar-item" data-id="<?php echo $imagenes[$i]['id'];?>" data-imgx="<?php echo $imagenes[$i]['name'];?>"><i class="fa fa-trash" aria-hidden="true"></i></div></div>


                  <?php
                }
                ?>

                <?php







                ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <form id="formGaleria" class="form-section" enctype="multipart/form-data">
              <div class="clear"></div>
              <label for="imagenes">
                <span type="span"  class="btn btn-info cWhite s20 text-center noTransform boxShadow pull-right" name="span">Buscar Imagen</span>
              </label>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                <input type="file" id="imagenes" name="imagenes[]" class="form-control" accept="image/*" multiple="true">
                </div>
              </div>

              <div class="clear"></div>
              <button type="submit" id="fileUploadGaleria" class="btn btn-success cWhite s20 text-center noTransform boxShadow pull-right" name="button">Subir Imagen</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php include ('footer.php'); ?>
<?php /*<script type="text/javascript">
   $(document).ready(function() {
      var id=$('body').attr('data-iduser');
      var fileInputProfPicture= $("#archivos").fileinput({
        uploadUrl: "uploadAjax.php", 
        uploadAsync: false,
        maxFileCount: 1,
        language: 'es',
        validateInitialCount:true,
        deleteUrl: "borrarAjax.php",
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        previewClass: 'classPreview',
        showUpload: false,
        uploadExtraData: {
          iduser: <?php echo $_SESSION['iduser'];?>,
      },
      showRemove: false,
      initialPreview: [
      <?php foreach($images as $image){ ?>
          "<img src='<?php echo $image; ?>' height='120px' class='file-preview-image'>",
          <?php } ?>],
          initialPreviewConfig: [<?php foreach($images as $image){ 
            //error_log($image);

            $infoImagenes=explode("../imagenes_/profPicture/",$image);
            //error_log($infoImagenes[1]);


            ?>
            { caption: "<?php echo $infoImagenes[1];?>",  height: "120px", url: "borrarAjax.php", key:"<?php echo $infoImagenes[1];?>"},
            <?php } ?>]
        }).on("filebatchselected", function(event, files) {


            $("#archivos").fileinput("upload");
            

        });
        var a=$("#archivos").fileinput;
    });

  </script>*/ ?>
  <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBPc0IqUH5Kc7aTNQlfMDXEcJFVglGC9DI" async defer></script>
