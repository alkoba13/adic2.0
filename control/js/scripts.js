'use strict';

var urlLocal="http://localhost:81/adic/";
var urlRemoto="http://adondeirenlaciudad.com/";
var appRuta='rApp.php';
urlRemoto=urlLocal;
var urlAjax=urlRemoto;

( function () {
  var method;
  var noop = function () {};
  var methods = [
  'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
  'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
  'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
  'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = ( window.console = window.console || {} );

  while ( length-- ) {
    method = methods[ length ];

    // Only stub undefined methods.
    if ( !console[ method ] ) {
      console[ method ] = noop;
    }
  }
}() );
( function ( $, window, document, undefined ) {
  "use strict";
  // Place any jQuery/helper plugins in here.

  $( document ).ready( function () {
    /*
    if ( $( '.splash' ).length != 0 ) {
      var welcomescreen_slides = [
        {
          id: 'slide0',
          picture: '<div class="splash slide0"></div><div class="bgCover bgTransparent"></div>',
          text: '<div class="splashContent">Bienvenido, este es el slide 1.</div>'
        },
        {
          id: 'slide1',
          picture: '<div class="splash slide1"></div><div class="bgCover bgTransparent"></div>',
          text: '<div class="splashContent">This is slide 2</div>'
        },
        {
          id: 'slide2',
          picture: '<div class="splash slide2"></div><div class="bgCover bgTransparent"></div>',
          text: '<div class="splashContent">This is slide 3</div>'
        },
        {
          id: 'slide3',
          picture: '<div class="splash slide3"></div><div class="bgCover bgTransparent"></div>',
          text: '<div class="splashContent">This is slide 4</div>'
        },
        {
          id: 'slide4',
          picture: '<div class="splash slide4"></div><div class="bgCover"></div>',
          text: '<div class="splashContent">' +
            '<div class="z-col-lg-4 z-col-md-4 z-col-sm-4 z-col-sm-offset-0 z-col-xs-8 z-col-xs-offset-2">' +
            '<a href="#" class="z-btn btn-rounded h50 bgGreen cWhite s20 text-center noTransform boxShadow welcomescreen-closebtn close-welcomescreen">' +
            'Comienza ya' +
            '</a>' +
            '</div>' +
            '</div>'
        }
      ];
      var options = {
        'bgcolor': '#333333',
        'fontcolor': '#fff',
        'closeButton': true,
        'cssClass': "bgTransparent",
        'onClosed': function () {
          renderMainSplash();
          fullHeight();
        },
        'open': true
      }
      var welcomescreen = new Welcomescreen( welcomescreen_slides, options );
    }

    function renderMainSplash() {
      $( '.splash' ).addClass( 'main' ).removeClass( 'bgDark' ).append(
        '<div class="bgCover"></div>' +
        '<div class="z-container">' +
        '<div class="hFull z-block">' +
        '<div class="z-content z-contentMiddle">' +
        '<div class="z-row">' +
        '<div class="z-col-lg-6 z-col-md-8 z-col-sm-10 z-col-xs-12 z-col-lg-offset-3 z-col-md-offset-2 z-col-sm-offset-1 z-col-xs-offset-0">' +
        '<img src="../images/logos/logo.png" class="centered z-forceBlock wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s" />' +
        '</div>' +
        '</div>' +
        '<div class="clear h100"></div>' +
        '<div class="z-row wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">' +
        '<div class="z-col-xs-12">' +
        '<h1 class="cWhite text-center s25">Bienvenido</h1>' +
        '</div>' +
        '<div class="z-col-lg-4 z-col-lg-offset-2 z-col-md-4 z-col-md-offset-2 z-col-sm-4 z-col-sm-offset-2 z-col-xs-8 z-col-xs-offset-2">' +
        '<a href="main.html" class="z-btn h50 btn-rounded bgGreen cWhite s20 text-center noTransform boxShadow" data-toggle="modal" data-target="#loginModal">' +
        'Inicia sesión<br>' +
        '</a>' +
        '<div class="clear"></div>' +
        '</div>' +
        '<div class="z-col-lg-4 z-col-md-4 z-col-sm-4 z-col-sm-offset-0 z-col-xs-8 z-col-xs-offset-2">' +
        '<a href="main.html" class="z-btn btn-rounded h50 bgLightBlue cWhite s20 text-center noTransform boxShadow" data-toggle="modal" data-target="#regModal">' +
        'Crea una cuenta' +
        '</a>' +
        '<div class="clear"></div>' +
        '</div>' +
        '<div class="z-col-lg-6 z-col-md-8 z-col-sm-10 z-col-xs-12 z-col-lg-offset-3 z-col-md-offset-2 z-col-sm-offset-1 z-col-xs-offset-0">' +
        '<a href="socios.php" class="cWhite s15 text-center noTransform z-block">' +
        'Acceso a Socios' +
        '</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>'
      );
    }
    */
    $( ".p2r" ).xpull( {
      'callback': function () {
        location.reload();
      }
    } );

    //var controller = new slidebars();
    //controller.init();

    // $( "#do_drag" ).swipe( {
    //   swipeStatus: function ( event, phase, direction, distance, duration, fingers ) {
    //     if ( phase == "move" && direction == "right" ) {
    //       openAside();
    //       return false;
    //     }
    //     if ( phase == "move" && direction == "left" ) {
    //       closeAside();
    //       return false;
    //     }
    //   }
    // } );
    // $( "#do_drag_search_open" ).swipe( {
    //   swipeStatus: function ( event, phase, direction, distance, duration, fingers ) {
    //     if ( phase == "move" && direction == "left" ) {
    //       openAsideSearch();
    //       return false;
    //     }
    //     if ( phase == "move" && direction == "right" ) {
    //       closeAsideSearch();
    //       return false;
    //     }
    //   }
    // } );

    var wow = new WOW( {
      offset: 100,
      mobile: true,
      live: true,
      scrollContainer: '.scroll'
    } )
    wow.init();

    fullHeight();

    $( '.fab' ).click( function () {
      if ( $( '.nav-modal' ).hasClass( 'active' ) ) {
        $( ".nav-modal" ).removeClass( "active" );
        $( 'body' ).removeClass( 'overflowHidden' );
      }
      else {
        $( ".nav-modal" ).addClass( "active" );
        $( 'body' ).addClass( 'overflowHidden' );
      }
    } );

    $( '#openAside' ).click( function ( e ) {
      e.preventDefault();
      e.stopPropagation();
      toggleAside();
    } )
    $( '#openSearch' ).click( function ( e ) {
      e.preventDefault();
      e.stopPropagation();
      toggleAsideSearch();
    } )

    function toggleAside() {
      controller.toggle( 'asideNav' );
      toggleSwipeArea();
    }

    function openAside() {
      controller.open( 'asideNav' );
      toggleSwipeArea();
    }

    function closeAside() {
      controller.close( 'asideNav' );
      toggleSwipeArea();
    }

    function toggleAsideSearch() {
      controller.toggle( 'searchNav' );
      /*toggleSwipeArea();*/
    }

    function openAsideSearch() {
      controller.open( 'searchNav' );
      /*toggleSwipeArea();*/
    }

    function closeAsideSearch() {
      controller.close( 'searchNav' );
      /*toggleSwipeArea();*/
    }

    function toggleSwipeArea() {
      if ( $( '#do_drag' ).hasClass( 'navOpen' ) ) {
        $( '#do_drag' ).removeClass( 'navOpen' );
      }
      else {
        $( '#do_drag' ).addClass( 'navOpen' );
      }
    }

    function toggleSwipeAreaSearch() {
      if ( $( '#do_drag_search_open' ).hasClass( 'navOpen' ) ) {
        $( '#do_drag_search_open' ).removeClass( 'navOpen' );
      }
      else {
        $( '#do_drag_search_open' ).addClass( 'navOpen' );
      }
    }

    if ( $( '.nav' ).length != 0 ) {
      var stickyNavTop = $( '.nav' ).offset().top;
      var stickyNav = function () {
        var scrollTop = $( window ).scrollTop();
        if ( scrollTop > stickyNavTop ) {    
          $( '.nav' ).addClass( 'sticky' );
        }
        else {    
          $( '.nav' ).removeClass( 'sticky' );
        }
      }; 
      stickyNav();
    }

    $( window ).scroll( function () {  
      stickyNav();
    } );
  } );

$( window ).resize( function () {
  fullHeight();
} )

$( document ).on( 'click', function ( event ) {

  if ( !$( event.target ).closest( '.fab' ).length ) {
    $( ".nav-modal" ).removeClass( "active" );
    $( 'body' ).removeClass( 'overflowHidden' );
  }
  else {
    $( ".nav-modal" ).addClass( "active" );
    $( 'body' ).addClass( 'overflowHidden' );
  }
} );

} )( jQuery, window, document );

function fullHeight() {
  var winHeight = $( window ).outerHeight();
  $( '.hFull' ).css( 'height', winHeight );
  $( '.hFull' ).css( 'max-height', winHeight );
  if ( $( '.hFull-body' ).length != 0 ) {
    var nav = $( '.nav' ).height();
    $( '.hFull-body' ).css( 'height', winHeight - nav );
    $( '.hFull-body' ).css( 'max-height', winHeight - nav );
  }
};

//crear cuenta por email
$( "#crteAccountE" ).on( 'click', function () {
  $.ajax( {
    data: {
      "reg_user": 1,
      "mail": $( "#ruMail" ).val(),
      "pass": $( "#ruPass" ).val()
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  } ).done( function ( data ) {
    data = $.parseJSON( data );
    console.log( data );
    if ( data.Y == "Y" ) {
      //alert('Registrado');
      window.location.replace( "main.php" );
    }
    else {
      alert( 'Erro usuario no registrado' );
    }
  } );
} );

$( "#searchBtn" ).on( 'click', function () {
  $( "#postContainer" ).empty();
  $.ajax( {
    data: {
      "search_post": 1,
      "search_terms": $( "#search" ).val()
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );

    $.each( data, function ( index, value ) {
      console.log( data[ index ] );
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, 'brayan', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
    } );

  } );
} );

//buscar restaurantes
$( "#findRestaurant" ).on( 'click', function () {
  $( "#postContainer" ).empty();
  $.ajax( {
    data: {
      "search_post": 1,
      "search_terms": 'Restaurant'
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );

    $.each( data, function ( index, value ) {
      console.log( data[ index ] );
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, '', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
    } );

  } );
} );

//buscar bares
$( "#findBar" ).on( 'click', function () {
  $( "#postContainer" ).empty();
  $.ajax( {
    data: {
      "search_post": 1,
      "search_terms": 'Bar'
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );

    $.each( data, function ( index, value ) {
      console.log( data[ index ] );
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, '', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
    } );

  } );
} );
//buscar antros
$( "#findAntro" ).on( 'click', function () {
  $( "#postContainer" ).empty();
  $.ajax( {
    data: {
      "search_post": 1,
      "search_terms": 'Antro'
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );

    $.each( data, function ( index, value ) {
      console.log( data[ index ] );
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, '', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
    } );

  } );
} );
//buscar foodtrucks
$( "#findFoodTruck" ).on( 'click', function () {
  $( "#postContainer" ).empty();
  $.ajax( {
    data: {
      "search_post": 1,
      "search_terms": 'FoodTrucks'
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );

    $.each( data, function ( index, value ) {
      console.log( data[ index ] );
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, '', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
    } );

  } );
} );
//buscar eventos
$( "#findEvent" ).on( 'click', function () {
  $( "#postContainer" ).empty();
  $.ajax( {
    data: {
      "search_post": 1,
      "search_terms": 'Eventos'
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );

    $.each( data, function ( index, value ) {
      console.log( data[ index ] );
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, '', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
    } );

  } );
} );
//buscar ubicaciones
$( "#findUbication" ).on( 'click', function () {
  $( "#postContainer" ).empty();
  $.ajax( {
    data: {
      "search_post": 1,
      "search_terms": 'Ubicaciones'
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );

    $.each( data, function ( index, value ) {
      console.log( data[ index ] );
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, '', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
    } );

  } );
} );

$( "#createCategory" ).on( 'click', function () {
  $.ajax( {
    data: {
      "register_Cat": 1,
      "name": $( "#categoryTitle" ).val(),
      "desc": $( "#descriptionx" ).val()
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );
    if ( data[ 0 ].Y ) {
      console.log( data );
      alert( 'Categoria registrada exitosamente' );
      data = null;
    }
    else {
      console.log( data );
      alert( 'Problemas al registrar Categoria' );
      data = null;
    }
  } );

  $( '#category' ).empty();

  $.ajax( {
    data: {
      "get_Category": 1
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );
    $.each( data, function ( index, value ) {
      $( '#category' ).append( createList( data[ index ].idcategory, data[ index ].nombre ) );
      console.log( data[ index ] );
    } );
  } );

} );

//crear cuenta por email socio
$( "#createSoc" ).on( 'click', function () {
  var type;
  var category = '';
  if($('#registerSocio').length != 0 ){
    type = "mail";
    category = $( '#categorySocio' ).val();
  }
  if($('#registerSocio-admin').length != 0 ){
    type = "admininstrador";
    category = $( '#category' ).val();
  }
  $.ajax( {
    data: {
      "reg_soc": 1,
      "name": $( "#nameSocio" ).val(),
      "phone": $( "#telSocio" ).val(),
      "mail": $( "#mailSocio" ).val(),
      "typeReg" : type,
      "negocio": $( "#nameNegocio" ).val(),
      "category": category
        //"pass": $("#passwSocio").val(),
        //"img": document.getElementById("imgProfile").files[0].name
      },
      url: '../classes/ajaxUsers.php',
      type: 'post'
    } ).done( function ( data ) {
      data = $.parseJSON( data );
      console.log( data );
      if ( data ) {
      //alert('Registrado');
      //window.location.replace("profile.php");
      if($('#registerSocio').length != 0 ){
        $( "#registerSocio" ).empty();
        $("#registerSocio").append(
          '<h1>¡Gracias!</h1>'+
          '<p>Tu solicitud es muy importante para nosotros, te pedimos de favor que estes al pendiente de tu correo o telefono.</p>'+
          '<p>Nos comunicaremos contigo a la brevedad posible.</p>'+
          '<div class="clearfix"></div>'+
          '<div class="separator">'+
          '<div class="hidden">'+
          '  <p>Copyright (c) 2015 Copyright Holder All Rights Reserved.</p>'+
          '</div>'+
          '</div>');
      }
      if($('#registerSocio-admin').length != 0){
        $('#registerSocio-admin').trigger('reset');
      }
    }
    else {
     swal({
      type: 'warning',
      title: 'Error',
      text: 'Erro usuario no registrado, Verifique por favor.'
    })
   }
 } );
  } );



// $( "#loginU" ).on( 'click', function () {
//   $.ajax( {
//     data: {
//       "login_user": 1,
//       "mail": $( "#logUser" ).val(),
//       "pass": $( "#logPass" ).val()
//     },
//     url: '../classes/ajaxUsers.php',
//     type: 'post'
//   } ).done( function ( data ) {
//     if ( data != 0 ) {
//       //alert('loggueado');
//       window.location.replace( "main.php" );
//     }
//     else {
//       alert( 'problemas al iniciar session' );
//     }
//   } );
// } );

//activacion de socios
$( ".activeBtn" ).on( 'click', function () {
  var $activeBtn = $(this);
  var $userID = $($activeBtn).closest('tr').find('.iduser').val();
  $.ajax( {
    data: {
      "activate_soc": $(this).val(),
      "iduser": $userID
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  }).done( function ( data ) {
    if ( data != 0 ) {
      $($activeBtn).closest('tr').addClass('bgGreenClear');
      setTimeout(function(){
        $($activeBtn).closest('tr').addClass('hidden');
      },400);
    }
    else {
      console.log( 'problemas al activar usuario' );
      console.log(data);
    }
  } );
} );

function deleteSoc(id,user,row){
  swal({
  title: 'Estas seguro de eliminar a: '+user,
  text: "El usuario sera eliminado de la lista",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, estoy seguro',
  CancelButtonText: 'No, cancelar',
  showLoaderOnConfirm: true,
}).then(function () {
    $.ajax( {
    data: {
      "delete_soc": 1,
      "iduser": id
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  }).done( function ( data ) {
    if ( data != 0 ) {
        swal({ 
    title:'Operacion Exitosa',
    text:'El usuario '+user+' ha sido eliminado.',
    type:'success'
  })
      $("#row_"+row).addClass('bgGreenClear');
      setTimeout(function(){
        $("#row_"+row).addClass('hidden');
      },400);
    }
    else {
      console.log( 'problemas al activar usuario' );
      console.log(data);
    }
  })
}, function (dismiss) {
  if (dismiss === 'cancel') {
    swal(
      'Operacion cancelada',
      'Ah cancelado eliminar: "'+user+'"',
      'error'
      )
  }
})
}

//desactivacion de socios
$( ".deactiveBtn" ).on( 'click', function () {
  var $deactiveBtn = $(this);
  var $userID = $($deactiveBtn).closest('tr').find('.iduser').val();
  $.ajax( {
    data: {
      "deactivate_soc": 1,
      "iduser": $userID
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  }).done( function ( data ) {
    if ( data != 0 ) {
      $($deactiveBtn).closest('tr').addClass('bgRedClear');
      setTimeout(function(){
        $($deactiveBtn).closest('tr').addClass('hidden');
      },400);
    }
    else {
      console.log( 'problemas al activar usuario' );
      console.log(data);
    }
  } );
} );

//desactivacion de socios
$( "#changeAccess" ).on( 'click', function () {
  var change = $(this);
  var userID = $(change).closest('form').find('#userID').val();
  var username = $(change).closest('form').find('#usernameP').val();
  var oldPass = $(change).closest('form').find('#oldPassP').val();
  var newPass = $(change).closest('form').find('#newPassP').val();
  $.ajax( {
    data: {
      "change_access": 1,
      "iduser": userID,
      "username": username,
      "oldPass": oldPass,
      "newPass": newPass
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  }).done( function ( data ) {
    if ( data != 0 ) {
      window.location.replace( "dashboard.php" );
    }
    else {
      console.log( 'problemas al actualizar usuario' );
      console.log(data);
      swal(
        'Operacion cancelada',
        'problemas al actualizar usuario: "'+username+'"',
        'error'
        )
    }
    
  } );
} );

$( "#logSocio" ).on( 'click', function () {
  $.ajax( {
    data: {
      "login_user": 1,
      "mail": $( "#userSoc" ).val(),
      "pass": $( "#passwSoc" ).val()
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  } ).done( function ( data ) {
    if ( data != 0 ) {
      data = jQuery.parseJSON( data );
      if(data[0].role !== 'usuario'){
        //console.log(data);
        window.location.replace( "dashboard.php" );
      } else {
        alert('acceso solo para socios')
        window.location.replace( "logout.php" );
      }
    }
    else {
      swal({
        type: 'warning',
        title: 'Error',
        text: 'Usuario o contraseña Icorrectos, Verifique por favor.'
      })

      console.log( 'problemas al iniciar session' );
      console.log(data);
    }
  } );
} );

$( ".profileU" ).on( 'click', function () {
  $( this ).submit();
} );
$("#editProfileUser").click(function(){
  $.ajax({
    url: '../classes/ajaxUsers.php',
    type: 'post',
    data: {editUs:1,user: $("#usernameP").val()}
  }).done(function(data){
    if ( data ) {
      console.log(data);
      swal({
        type: 'success',
        title: 'Operacion Exitosa',
        text: 'Las modificaciones de usuario se guardaron con exito.'
      })
    }
  });

});

$( "#logOutbtn" ).on( 'click', function () {
  $.ajax( {
    data: {
      "logout": 1
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  } ).done( function ( data ) {
    window.location.replace( "index.php" );
  } );
} );

$( "#editProfile" ).on( 'click', function () {
  // var profilePic;
  // if (document.getElementById( "fileToUpload" ).files[ 0 ].name == undefined) {
  //   profilePic = "01.png";
  // } else {
  //   profilePic = document.getElementById( "fileToUpload" ).files[ 0 ].name;
  // }
  $.ajax( {
    data: {
      "editProfile": 1,
      "name": $( "#nameP" ).val(),
      "number": $( "#phoneP" ).val(),
      "negocio": $( "#negocioP" ).val(),
      "email": $("#emailP").val(),
      //"file": profilePic
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  } ).done( function ( data ) {
    if ( data ) {
      console.log(data);
      swal({
        type: 'success',
        title: 'Operacion Exitosa',
        text: 'Las modificaciones de usuario se guardaron con exito.'
      })
      //$( "#editProfileF" ).submit();
    }
  } );

} );

$('#saveDireccion').on('click', function(){
  $.ajax({
    data: {
      "save_direccion": 1,
      "calle": $('#calleDir').val(),
      "numero": $('#numeroDir').val(),
      "municipio": $('#municipioDir').val(),
      "estado": $('#estadoDir').val(),
      "pais": $('#paisDir').val(),
      "cp": $('#cpDir').val(),
      "lat": $('#latDir').val(),
      "lon": $('#lonDir').val()
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  }).done(function(data){
    if(data){
      console.log(data);
    }
  })
})

// window.onload = function () {
//
//   $( "#registerUser" ).validate( {
//     rules: {
//       ruMail: {
//         required: true,
//         email: true
//       },
//       ruPass: {
//         required: true,
//         minlength: 5
//       }
//     },
//     messages: {
//       ruMail: "Porfavor ingresa un E-mail valido",
//       ruPass: "Ingresa una contraseña con mas de 5 caracteres",
//     }
//   } );
//
//
//   $( "#registerSocio" ).validate( {
//     rules: {
//       nameSocio: {
//         required: true
//       },
//       telSocio: {
//         required: true
//       },
//       mailSocio: {
//         required: true,
//         email: true
//       },
//       passwSocio: {
//         required: true,
//         minlength: 5
//       }
//     },
//     messages: {
//       nameSocio: "Porfavor ingresa un nombre",
//       telSocio: "Porfavor ingresa un telefono",
//       mailSocio: "Porfavor ingresa un E-mail valido",
//       passwSocio: "Ingresa una contraseña con mas de 5 caracteres",
//     }
//   } );
//
//   // id de boton createSoc
//
//
//   $( "#lognUser" ).validate( {
//     rules: {
//       logUser: {
//         required: true,
//         email: true
//       },
//       logPass: {
//         required: true,
//         minlength: 5
//       }
//     },
//     messages: {
//       logUser: "Porfavor ingresa un E-mail valido",
//       logPass: "Ingresa una contraseña con mas de 5 caracteres",
//     }
//   } );
// }

// $( "#registerSocio input" ).on( 'keypress change', function () {
//   var valid = $( "#registerSocio" ).valid();
//   if ( valid == true ) {
//     $( "#createSoc" ).prop( "disabled", false );
//   }
//   else {
//     $( "#createSoc" ).prop( "disabled", "disabled" );
//   }
// } );
//
// $( "#registerUser input" ).on( 'keypress change', function () {
//   var valid = $( "#registerUser" ).valid();
//   if ( valid == true ) {
//     $( "#crteAccountE" ).prop( "disabled", false );
//   }
//   else {
//     $( "#crteAccountE" ).prop( "disabled", "disabled" );
//   }
// } );
//
// $( "#lognUser input" ).on( 'keypress change', function () {
//   var valid = $( "#lognUser" ).valid();
//   if ( valid == true ) {
//     $( "#loginU" ).prop( "disabled", false );
//   }
//   else {
//     $( "#loginU" ).prop( "disabled", "disabled" );
//   }
// } );

$( ".searchDay" ).on( 'click', function () {
  $( "#postContainer" ).empty();
  $.ajax( {
    data: {
      "postsDay": 1,
      "date": $( this ).val()
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );

    $.each( data, function ( index, value ) {
      console.log( data[ index ] );
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, 'brayan', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
    } );

  } );
} );

$( document ).ready( function () {
  $.ajax( {
    data: {
      "get_Category": 1
    },
    url: '../classes/ajaxPosts.php',
    type: 'post'
  } ).done( function ( data ) {
    data = jQuery.parseJSON( data );
    $.each( data, function ( index, value ) {
      $( '#category' ).append( createList( data[ index ].idcategory, data[ index ].nombre ) );
      //console.log(data[index]);
    } );
  } );
} );

/***** booz ********/
$(document).ready(function() {
 $('#formGaleria').each(function(index, el) {
  console.log(" carousel");
  var $carousel =$('.owl-carousel');
  $carousel.owlCarousel({
    items:1,
    autoHeight:true,
    responsiveClass:true,
    lazyLoad:true,
    loop:true,
    margin:0
  }).removeClass('owl-hidden');

  $(document).on('submit','#formGaleria',function(e){
    e.preventDefault();
    var $form = $(this);
    //console.log("clcik");

    uploadImage($form[0]);
  });
  $(document).on('click', '.eliminar-item', function(event) {
    event.preventDefault();
    var id=$(this).attr('data-id');
    var img=$(this).attr('data-imgx');
    $.ajax({
      url: "upload.php",
      type: "post",
      dataType: "json",
      data: {id:id,modulo:'galeria',action:'b',iduser:id_user,img:img},
      cache: false,
    })
    .done(function(res){

      console.log("Respuesta: " + res.galeria);
      if (res.continuar==="ok") {
        //alert(res.mensaje);
        //console.log(res.galeria);
        console.log('success');
      }
      else{
       //alert(res.mensaje);
       //console.log(res.galeria);
       console.log('error');
     }
     $carousel =$('.owl-carousel.owl-loaded');
     if ($carousel[0]) {
       $carousel.data('owl.carousel').destroy(); 
     }
     var html='';
     for (var i in res.galeria){
      html+='<div class="item"><img class="owl-lazy"'+ 
      ' data-src="../imagenes_/galeria/'+
      res.galeria[i].name+'" alt="'+res.galeria[i].description+'">'+
      '<div class="eliminar-item" data-id="'+res.galeria[i].id+'" data-imgx="'+res.galeria[i].name+'">'+
      '<i class="fa fa-trash" aria-hidden="true"></i></div></div>';

    }

    $carousel.html(html);
    $carousel.owlCarousel({
      items:1,
      autoHeight:true,
      responsiveClass:true,
      lazyLoad:true,
      loop:true,
      margin:0
    }).removeClass('owl-hidden');
    swal({
        type:'success'
        ,text:res.mensaje
        ,title:'Operacion Exitosa'
      });
  });
  });
  function uploadImage($form){
    var formData = new FormData($form);
    formData.append("iduser", id_user);
    formData.append("modulo", "galeria");
    formData.append("action", "a");
    //console.log(formData);
    $.ajax({
      url: "upload.php",
      type: "post",
      dataType: "json",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    })
    .done(function(res){

      console.log("Respuesta: " + res.galeria);
      if (res.continuar==="ok") {
        //alert(res.mensaje);
       /* console.log(res.galeria);*/
        console.log('success');
      }
      else{
       //alert(res.mensaje);
       /*console.log(res.galeria);*/
       console.log('error');
     }
     $carousel =$('.owl-carousel.owl-loaded');
     if ($carousel[0]) {
       $carousel.data('owl.carousel').destroy(); 
     }
     var html='';
     for (var i in res.galeria){
      html+='<div class="item"><img class="owl-lazy"'+ 
      ' data-src="../imagenes_/galeria/'+
      res.galeria[i].name+'" alt="'+res.galeria[i].description+'">'+
      '<div class="eliminar-item" data-id="'+res.galeria[i].id+'" data-imgx="'+res.galeria[i].name+'">'+
      '<i class="fa fa-trash" aria-hidden="true"></i></div></div>';
      
    }

    $carousel.html(html);
    $carousel.owlCarousel({
      items:1,
      autoHeight:true,
      responsiveClass:true,
      lazyLoad:true,
      loop:true,
      margin:0
    }).removeClass('owl-hidden');
    swal({
        type:'success'
        ,text:res.mensaje
        ,title:'Operacion Exitosa'
      });


  });
  }

  

});


 function getPost(){

  var data= {'action': 'getPostSocio',iduser:id_user};
  $.ajax({
    data:data,
    crossDomain: true,
    cache: false,
    xhrFields: {
      withCredentials: true
    },
    url: urlAjax+'classes/'+appRuta,
    type: 'post'
  }).done(function(data){
    if(data.continuar==="ok"){
      var post = data.datos.post;
      console.log(post);
      var addresses= data.datos.addresses;
    }
    else{
      var addresses= data.datos.addresses;

    }
    /*  ajaxLoader("termina");*/

  }).fail(function( jqXHR, textStatus, errorThrown ) {
    $("#postContainer").html('<div class="" style="min-height:100vh;height:300px;">Sin publicaciones :(');
    /* ajaxLoader("termina");*/
  });
}
$('#postContainer').each(function(index, el) {
   // getPost(); esto causa errores?

   console.log('ready publicaciones');
   $(document).on('submit','#formCreatePost',function(e){
    e.preventDefault();
    var $form = $(this);

    if ($("#postTitle").val()&&$("#postDate").val()) {
      uploadImage($form);
      swal.close ();

    }else{//validador de campos
      var t='';       
      if (!$("#postTitle").val()){ t='titulo';
    }else{if(!$("#postDate").val()){t='fecha';
  }
}
;
$('#valida').html('<div id="valIco"></div><h2 style=\"color:blue;\">El campo de '+t+' es obligatorio. Escriba una '+t+' valida y vuelva a intentarlo.</h2>');
$('#valida').attr('style','background-color: #f0f0f0; width: 100%; padding: 10px;');
$('#valIco').attr('style','color: #ea7d7d;');
$('#valIco').attr('class','fa fa-exclamation-circle')
}  
});
   function uploadImage($form){
    var formData = new FormData($form[0]);
    formData.append("iduser", id_user);
    formData.append("title", $( "#postTitle" ).val());
    formData.append("description",$( "#postDescription" ).val());
    formData.append("date",$( "#postDate" ).val());
    formData.append("modulo", "post");
      //alert(document.getElementById("file").value);
      if ($('#uplPost').val()!=''&&$('#uplPost').val()!=null)
        {formData.append("idPst",$('#uplPost').val());
      formData.append("action", "b");}
      else{formData.append("action", "a");}
      console.log(formData);
      $.ajax({
        url: "upload.php",
        type: "post",
        dataType: "json",
        data: formData,
        crossDomain: true,
        cache: false,
        xhrFields: {
          withCredentials: true
        },
        contentType: false,
        processData: false,
        beforeSend: function(){
          $('#createPost').html('subiendo...');
        },
      })
      .done(function(res){
        console.log("Respuesta: " + res);
        tablePosts.ajax.reload();
        $('#createPost').html('ok');
        swal({
          type: 'success',
          title: 'Operacio Exitosa',
          text: 'La publicacion ha sido creada con exito.'
        })

      }).fail(function(res) {
        console.log("fallo: " + res);
        swal({
          type: 'warning',
          title: 'Error',
          text: 'Por favor contacte al soporte tecnico.'
        })
      }).always(function() {
        $('#createPost').html('Crear');
      });
    }
  });
$('#formProfileimage').each(function(index, el) {

  console.log('ready profile');
  $(document).on('submit','#formProfileimage',function(e){
    e.preventDefault();
    var $form = $(this);
    console.log("clcik");

    uploadImage($form);
  });
  function uploadImage($form){
    var formData = new FormData($form[0]);
    formData.append("iduser", id_user);
    formData.append("modulo", "profileImage");
    formData.append("action", "a");
    console.log(formData);
    $.ajax({
      url: "upload.php",
      type: "post",
      dataType: "json",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    })
    .done(function(res){

      console.log("Respuesta: " + res);
      if(res[0].img!==undefined){
        var img = res[0].img;
        console.log(img);
        $('.profile_pic div').attr({
          style: "background-image:url('../imagenes_/profPicture/"+img+"');"
        });
        $('#previewProfileImage').attr({
          src: "../imagenes_/profPicture/"+img
        });

      }

    });
  }

});


});

/*-------------ABC  tabla direcciones-----*/
var tableAddress=null;
function crearTablaAddress(){
  tableAddress= $("#tableDir").DataTable({
    "iDisplayLength":100,
    "processing":true,
    "serverSide":true,
    "defaultContent": "-",
    "targets": "_all",
    ajax:{
      type: "POST",
      url:'../classes/ajaxPosts.php',
      data: { tableDir:'1'},
      dataType: "json",
    },  
    "columnDefs":[
    {
      "targets" : [9],
      "render": function(data,type,full){
        return '<i onClick="formAddres(0,\''+full[1]+'\',\''+full[2]+'\',\''+full[3]+'\',\''+full[4]+'\',\''+full[5]+'\',\''+full[6]+'\',\''+full[7]+'\',\''+full[8]+'\','+full[0]+')" class="fa fa-pencil-square-o" title="Editar la direccion del renglon a la cual corresponde este boton" aria-hidden="true"></i>';
      },orderable: false
    },
    {
      "targets" : [10],
      "render": function(data,type,full){
        if(data == 1){
          return '<button class="btn bgGreen cWhite fa fa-check-square" onClick="setStatus(0,'+full[0]+')">Activo</button>';
        }else{
          return '<button class="btn bgRed cWhite fa fa-times-circle" onClick="setStatus(1,'+full[0]+')">Inactivo</button>';
        }

      },orderable: false
    }

    ],
    "sDom":'ltrip',
    "initComplete": function(settings, json) {
    }
  });

  tableAddress.on( 'order.dt search.dt', function () {
    tableAddress.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
      cell.innerHTML = i+1;
    } );
  } ).draw();
}
/*-- funciones del mapa de direciones -*/

var map;
//crear mapa
function initMap(lat,long) {
  if (lat==null||long==null) {
   lat = 25.5409967;
   long=-103.4349972;
  }//alert(lat+", "+long);
  var myLatLng = {lat:lat, lng: long};     
  var map = new google.maps.Map(document.getElementById('mapDir'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 16,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
        // Crear posicion del marcador
        var marker = new google.maps.Marker({
          draggable: true,
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
 //posicion al arrastrar el marcador       
 google.maps.event.addListener(marker, 'drag', function(){
  $("#latDir").val(marker.getPosition().lat());
  $("#lonDir").val(marker.getPosition().lng());
});

}
//funcion para calcular latitud y longitud por medio de la direccion
function geo(address){
  var geocoder = new google.maps.Geocoder();
  if (address=='') {address='Bosque Venustiano Carranza, Torreón';}
  var latitude;
  var longitude;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {

     latitude = results[0].geometry.location.lat();

     longitude = results[0].geometry.location.lng();
//console.log('La longitud es: ' + longitude + ', la latitud es: ' + latitude);
initMap(latitude,longitude);
$("#latDir").val(latitude);
$("#lonDir").val(longitude);

} 
});  
}
//
function keyupDir(){
  $("input[id*=Dir]").on('keyup',function(){
    if($(this).attr("id")!='cpDir'&&$(this).attr("id")!='latDir'&&$(this).attr("id")!='lonDir'&&$(this).attr("id")!='mapDir'){
      var address='';  
      for (var i = 1; i <= 5; i++) {
       if ($(".geo"+i).val()!='' && i!=1) { address+=','}
         address+=' '+ $(".geo"+i).val();
     }
      //alert(address);
      geo(address);
    }
    if ($(this).attr("id")=='latDir'||$(this).attr("id")=='lonDir') { if ($("#latDir").val()!=''&&$("#lonDir").val()!='') {
      initMap(parseFloat($("#latDir").val()),parseFloat($("#lonDir").val()));
    }
  }
});
}
/*---------/funciones del mapa de direciones --*/

/*<button type="button" id="saveDireccion" class="btn bgGreen cWhite pull-right" >Guardar Dirección</button>*/
$('#btnAddAddress').click(function(){formAddres(1,'','','','','','','','','');});
function setStatus(st,id){
  var u;
  if (st==1) {u='activada';}
  else{u='desactivada';}
  $.ajax({
    type: "POST",
    url: '../classes/ajaxPosts.php',
    data:{direccion: 3,status: st, idAdd:id},
    success: function(){
      tableAddress.ajax.reload();
      swal({
        type: 'success',
        title: 'Operacio Exitosa',
        text: 'La direccion ha sido '+u+'.'
      })
    },
    error: function(e){
      swal({
        type: 'warning',
        title: 'Error',
        text: e
      })
    }
  });
}
function formAddres(type,dir,col,mun,est,pais,cp,lat,long,id){ 
  var formAddress='<form id="editProfileD"><div class="form-section"><label for="calleDir">Dirección</label><input id="calleDir" type="text" class="form-control geo1" placeholder="Calle y numero" name="calleDir" value="'+dir+'" required><div class="clear"></div></div><div class="form-section"><label for="numeroDir">Colonia</label><input id="coloniaDir" type="text" class="form-control geo2" placeholder="Colonia" name="numeroDir" value="'+col+'" required><div class="clear"></div></div><div class="form-section"><label for="municipioDir">Municipio</label><input id="municipioDir" type="text" class="form-control geo3" placeholder="Municipio" name="municipioDir" value="'+mun+'" required><div class="clear"></div></div><div class="form-section"><label for="estadoDir">Estado</label><input id="estadoDir" type="text" class="form-control geo4" placeholder="Estado" name="estadoDir" value="'+est+'" required><div class="clear"></div></div><div class="form-section"><label for="paisDir">País</label><input id="paisDir" type="text" class="form-control geo5" placeholder="País" name="paisDir" value="'+pais+'" required><div class="clear"></div></div><div class="form-section"><label for="cpDir">Código Postal</label><input id="cpDir" type="text" class="form-control" placeholder="CP" name="cpDir" value="'+cp+'" required><div class="clear"></div></div><div class="form-section"><label for="latDir">Latitud</label><input id="latDir" type="text" class="form-control" placeholder="Latitud" name="latDir" value="'+lat+'" required><div class="clear"></div></div><div class="form-section"><label for="lonDir">Longitud</label><input id="lonDir" type="text" class="form-control" placeholder="Longitud" name="lonDir" value="'+long+'" required><div class="clear"></div></div><div id="mapDir" style="width: 100%; height: 350px;" ></div></form>';
  swal({
    title:'+Direcciones',
    html: formAddress,
    customClass: 'swal-xl',
    showCancelButton: true,
    showCloseButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Guardar Dirección',
    showLoaderOnConfirm: true,
    preConfirm: function () {
      return new Promise(function (resolve, reject) {
        if ($("#calleDir").val()&&$("#latDir").val()&&$("#lonDir").val()) {
         $.ajax({
          type: "POST",
          url: '../classes/ajaxPosts.php',
          data: {direccion: type,dir:$('#calleDir').val(),col:$('#coloniaDir').val(),mun:$('#municipioDir').val(),est:$('#estadoDir').val(),pais:$('#paisDir').val(),cp:$('#cpDir').val(),lat:$('#latDir').val(),lon:$('#lonDir').val(),idAdd: id},
          beforeSend: function(){
          },
          success: function(response){
            if (response==true) {
              swal({
                type: 'success',
                title: 'Operacio Exitosa',
                text: 'La direccion ha sido guardad con exito.'
              })
              tableAddress.ajax.reload();
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
    if (!$("#calleDir").val()){ t='direccion';
  }else{if(!$("#latDir").val()){t='latitud';
}else{if(!$("#lonDir").val()){t='longitud';} 
} 
}
reject('<h2 style=\"color:blue;\">El campo de '+t+' es obligatorio. Escriba una '+t+' valida y vuelva a intentarlo.</h2>')
}
});
    }
  }).then(function () {})
  initMap(null,null);
  keyupDir();
}
/*-------------/ABC  tabla direcciones-----*/
/*-------------ABC  tabla Publicaciones-----*/
var tablePosts=null;
function crearTablaPosts(){
  tablePosts= $("#tablePub").DataTable({
    "iDisplayLength":100,
    "processing":true,
    "serverSide":true,
    "defaultContent": "-",
    "targets": "_all",
    ajax:{
      type: "POST",
      url:'../classes/ajaxPosts.php',
      data: { tablePub:'1'},
      dataType: "json",
    },  
    "columnDefs":[
    {"targets": [4],
    visible: false

  },
  {"targets":[6],
  "render": function(data,type,full){
    return '<i onClick="formPosts(\''+full[1]+'\',\''+full[2]+'\',\''+full[3]+'\',\''+full[5]+'\','+full[0]+')" class="fa fa-pencil-square-o" title="Editar la direccion del renglon a la cual corresponde este boton" aria-hidden="true"></i><i class="fa fa-times" onClick="deleteStPost(3,'+full[0]+', \''+full[1]+'\')"></i>';
  },orderable: false
},
{"targets":[7],
"render": function(data,type,full){
  if(full[6] == 1){
    return '<button class="btn bgGreen cWhite fa fa-check-square" onClick="setStatusPosts(0,'+full[0]+')"> Dejar de Publicar</button>';
  }else{
    return '<button class="btn bgRed cWhite fa fa-times-circle" onClick="setStatusPosts(1,'+full[0]+')"> Republicar</button>';
  }
},orderable: false
}

],
         // "sDom":'ltrip',
         "initComplete": function(settings, json) {
         }
       });

  tablePosts.on( 'order.dt search.dt', function () {
    tablePosts.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
      cell.innerHTML = i+1;
    } );
  } ).draw();
}
$('#btnAddPosts').click(function(){formPosts('','','','','');});
function deleteStPost(st,id,tit){
 swal({
  title: '¿Esta seguro?',
  text: 'Esta a punto de eliminar la publicacion : "'+tit+'"',
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, estoy seguro' ,
  cancelButtonText: 'No, cancelar' ,
}).then(function () {
  setStatusPosts(st,id);
}, function (dismiss) {
  if (dismiss === 'cancel') {
    swal(
      'Operacion cancelada',
      'Ah cancelado eliminar: "'+tit+'"',
      'error'
      )
  }
})
}


function setStatusPosts(st,id){
  var u;
  if (st==1) {u='republicada';}
  else{if(st==1){u='desactivada';}
  else{u='eliminada';}
}
$.ajax({
  type: "POST",
  url: '../classes/ajaxPosts.php',
  data:{publicacion: 3,status: st, idAdd:id},
  success: function(){
    tablePosts.ajax.reload();
    swal({
      type: 'success',
      title: 'Operacion Exitosa',
      text: 'La publicacion ha sido '+u+'.'
    })
  },
  error: function(e){
    swal({
      type: 'warning',
      title: 'Error',
      text: e
    })
  }
});

}
function formPosts(tit,des,fec,file,id){
  var formPosts='<form id="formCreatePost" class="form-section" enctype="multipart/form-data" ><div class="clear" ></div><input id="postTitle" type="text" class="form-control" placeholder="Nombre de la oferta" value="'+tit+'"><input id="uplPost"  value="'+id+'" style="display:none;"><div class="clear"></div><textarea id="postDescription" class="form-control h100" rows="4" placeholder="Descripción">'+des+'</textarea><div class="clear"></div><input id="postDate" class="form-control" type="date" name="name" value="'+fec+'">     <div class="clear"></div><input type="file" id="file" name="file" class="form-control" accept="image/*" value="'+file+'"><div class="clear"></div><div id="valida"></div> <button type="submit" id="createPost" class="btn btnSuccess cWhite s20 text-center noTransform boxShadow pull-right" name="button">Crear</button></form>';
  swal({
    title:'+Publicaciones',
    html: formPosts,
    showCancelButton: false,
    showCloseButton: true,
    showConfirmButton: false,
  }).then(function () {})
}/*----<ul><li><div class="clear"></div><div><label>Lunes</label><label class="switch"><input type="checkbox" id="weekLunes"><div class="slider round"></div></label></div></li><li><div class="clear"></div><div><label>Martes</label><label class="switch"><input type="checkbox" id="weekMartes"><div class="slider round"></div></label></div></li><li><div class="clear"></div><div><label>Miercoles</label><label class="switch"><input type="checkbox" id="weekMiercoles"><div class="slider round"></div></label></div></li><li><div class="clear"></div><div><label>Jueves</label><label class="switch"><input type="checkbox" id="weekJueves"><div class="slider round"></div></label></div></li><li><div class="clear"></div><div><label>Viernes</label><label class="switch"><input type="checkbox" id="weekViernes"><div class="slider round"></div></label></div></li><li><div class="clear"></div><div><label>Sabado</label><label class="switch"><input type="checkbox" id="weekSabado"><div class="slider round"></div></label></div></li><li><div class="clear"></div><div><label>Domingo</label><label class="switch"><input type="checkbox" id="weekDomingo"><div class="slider round"></div></label></div></li></ul>*/
/*-------------/ABC  tabla Publicaciones-----*/
$(document).ready(function(){crearTablaAddress();
  crearTablaPosts();});