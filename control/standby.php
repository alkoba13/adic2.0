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
<div id="standby" class="right_col" role="main">
  <div class="row">
    <div class="col-xs-12">
      <section class="x_panel">
        <div class="x_title">
          <h2>Solicitudes</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="table-responsive">
            <table id="socTabla" class="table table-hover jambo_table">
              <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Mail</th>
                  <th>Contacto</th>
                  <th>Telefono</th>
                  <th>Negocio</th>
                  <th>Password</th>
                  <!-- <th>Rol</th> -->
                 <!-- <th>Estatus</th>
                   <th>Tipo de registro</th> -->
                  <th>Acciones</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $socios = user::getStanbySoc();
                
                foreach ($socios as $key => $value) {

                  $socios[$key]['active'] = ($socios[$key]['active'] == 0)? 'Inactivo' : 'activo';

                  $row = '<tr id="row_'.$key.'">'.
                    '<td>'.$socios[$key]['username'].'</td>'.
                    '<td>'.$socios[$key]['mail'].'</td>'.
                    '<td>'.$socios[$key]['name'].'</td>'.
                    '<td>'.$socios[$key]['number'].'</td>'.
                    '<td>'.$socios[$key]['negocio'].'</td>'.
                    '<td>'.$socios[$key]['pass'].'</td>'.
                    // '<td>'.$socios[$key]['role'].'</td>'.
                   // '<td>'.$socios[$key]['active'].'</td>'.
                    // '<td>'.$socios[$key]['reg_type'].'</td>'.
                    '<td>
                      <input class="iduser" type="hidden" value="'.$socios[$key]['iduser'].'" name="iduser">
                      <button class="activeBtn" value="2" type="button" >Activar</button>
                    </td><td><i id="btnDeleteSoc" class="fa fa-times" onclick="deleteSoc('.$socios[$key]['iduser'].', \''.$socios[$key]['username'].'\','.$key.')" title="Elimina el socio del listado"></i></td>'.
                  '</tr>';
                  echo $row;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<?php }}include ('footer.php'); ?>
