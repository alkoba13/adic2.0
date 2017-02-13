/*function login(){
  $('.submit_login').click(function(e){
    e.preventDefault();
    $.ajax({
      data:  {
        "login_user" : 1,
        "txtusuario": $("#txtuser").val(),
        "txtpass": $("#txtpass").val()
      },
      url: 'classes/login.php',
      type: 'post'
    }).done(function(data){
      if (data != 0) {
        //console.log(data);
        document.location.replace('panel.php');
      }else{
        alert('problemas al iniciar session');
      }
    });
  })
}

function logout(){
  $('#submit_logout').click(function(e){
    e.preventDefault();
    $.ajax({
      data:  {
        "logout" : 1
      },
      url: 'classes/login.php',
      type: 'post'
    }).done(function(data){
      if (data != 0) {
        //console.log(data);
        document.location.replace('index.php');
      }else{
        alert('No se puede deslogear');
        console.log(data);
      }
    });
  })
}

function newUser(){
  $.ajax({
    data:  {
    "register_user" : 1,
    "name": $('#name_newUser').val(),
    "mail": $("#email_newUser").val(),
    "username" :$("#username_newUser").val(),
    "telephone": $("#telephone_newUser").val(),
    "password" : $("#password_newUser").val(),
    "rol": $("#rol_newUser").val()
    },
    url: 'classes/register.php',
    type: 'post'
  }).done(function(data){
    if (data != 0) {
      console.log(data);
      //hay que hacer una ventana de SUCCESS
    }else{
      alert('problemas al registrar');
    }
  });
}

function saveNewArticle(){
  $('#saveNewArticle').click(function(e){
    e.preventDefault();
    var data = {
      "new_articulo": 1,
      "nombre_articulo": $("#nombre_articulo").val(),
      "descripcion_articulo": $("#descripcion_articulo").val(),
      "escala_articulo": $("#escala_articulo").val(),
      "tamano_articulo": $("#tamaño_articulo").val(),
      "categoria_articulo": $("#categoria_articulo").val()
    };
    $.ajax({
      data:  data,
      url: 'classes/articulos.php',
      type: 'post'
    }).done(function(data){
      if (data != 0) {
        //console.log(data);
        document.location.replace(document.location.pathname);
      }else{
        alert('problemas al iniciar session');
      }
    });
  })
}

function saveNewPaquete(){
  $('#saveNewPaquete').click(function(e){
    e.preventDefault();
    $.ajax({
      data:  {
      "new_paquete": 1,
      "nombre_paquete": $("#nombre_paquete").val(),
      "descripcion_paquete": $("#descripcion_paquete").val(),
      "articulo_paquete": $("#articulo_paquete").val(),
      "cantidad_paquete": $("#cantidad_paquete").val()
      },
      url: 'classes/articulos.php',
      type: 'post'
    }).done(function(data){
      if (data != 0) {
        //console.log(data);
        document.location.replace(document.location.pathname);
      }else{
        alert('problemas al crear paquete\n'+data);
      }
    });
  })
}

function saveExistencias(){
  $('#saveExistencias').click(function(e){
    e.preventDefault();
    var existencias = [];
    var id_art, cant_art;
    $.each($('#availableArticles tbody tr'),function(key, val){
      cant_art = $(val).find('.cant').val()
      if(cant_art != ''){
        id_art = $(val).find('.id').val();
        existencias.push(
          {index: key, id_articulo: id_art, cantidad_articulo: cant_art }
        );
      }
    })
    if(existencias.length != 0){
      $.ajax({
        data:  {
          "new_existencia": 1,
          "existencias": existencias
          //"descripcion_paquete": $("#descripcion_paquete").val(),
          //"articulo_paquete": $("#articulo_paquete").val(),
          //"cantidad_paquete": $("#cantidad_paquete").val()
        },
        url: 'classes/articulos.php',
        type: 'post'
      }).done(function(data){
        if (data != 0) {
          console.log(data);
          //document.location.replace(document.location.pathname);
        }else{
          alert('problemas al crear paquete\n'+data);
        }
      });
    } else {
      console.log('No hay datos para insertar');
    }
  })
}
*/
/*
$(document).ready(function(){
  if($('#login').length!=0){
    login();
  }
  if ($('#submit_logout').length!= 0) {
    logout();
  }
  if($('#articulos').length!=0){
    saveNewArticle();
  }
  if($('#paquetes').length!=0){
    saveNewPaquete();
  }
  if($("#nuevo_usuario").length!=0){
    // initialize the validator function
    validator.message.date = 'not a real date';
    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required').on('keyup blur', 'input', function() {
      validator.checkField.apply($(this).siblings().last()[0]);
    });

    $('#addNewUser').click(function(e) {
      e.preventDefault();
      var submit=true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this).closest('form'))) {
        submit = false;
      }
      if (submit){
        newUser();
      }
    });
  }
  if($('#salida_almacen').length!=0){
    $('#wizard').smartWizard();

    $('#wizard_verticle').smartWizard({
      transitionEffect: 'slide'
    });

    $('.buttonNext').addClass('btn btn-success');
    $('.buttonPrevious').addClass('btn btn-primary');
    $('.buttonFinish').addClass('btn btn-default');
  }
  if($('#existencias').length!=0){
    saveExistencias();
  }
})
*/
