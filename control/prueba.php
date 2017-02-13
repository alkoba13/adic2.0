<?php
require_once('footer.php');
?>
<script type="text/javascript">
prue();
  function prue(){
    $.ajax({
      type: "POST",
      url:'../classes/ajaxPosts.php',
      data: { tableDir:'1'},
        dataType: "json",
      success: function(datos){
       alert(datos);


      },
     error: function(error) { console.log(error) }
       

    });
      }
   preConfirm: function () {
      return new Promise(function (resolve, reject) {
      if ($("#postTitle").val()&&$("#postDate").val()) {
       $.ajax({
        type: "POST",
        url: '../classes/ajaxPosts.php',
        data: {publicacion: type,tit:$('#postTitle').val(),des:$('#postDescription').val(),fec:$('#postDate').val(),file:$('#file').val()},
        beforeSend: function(){
        },
        success: function(response){
          if (response==true) {
            swal({
              type: 'success',
              title: 'Operacio Exitosa',
              text: 'La direccion ha sido guardad con exito.'
            })
          tablePosts.ajax.reload();
          }else{
            swal({
            type: 'warning',
            title: 'Error',
            text: 'Por favor contacte al soporte tecnico.'
          })
          }
        },
        error: function(e){
          swal({
            type: 'warning',
            title: 'Error',
            text: e
          })
        }
    });
  }else{//validador de campos
    var t='';       
    if (!$("#postTitle").val()){ t='titulo';
    }else{if(!$("#postDate").val()){t='frcha';
    }
    }
    reject('<h2 style=\"color:blue;\">El campo de '+t+' es obligatorio. Escriba una '+t+' valida y vuelva a intentarlo.</h2>')
  }
  });
 }
</script>