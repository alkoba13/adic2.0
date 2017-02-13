/*
 * Front-End Lab's - v0.0.1
 *
 * Application Core (Scripts)
 *
 */

// Avoid `console` errors in browsers that lack a console.
'use strict';

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

    $( ".p2r" ).xpull( {
      'callback': function () {
        location.reload();
      }
    } );

    var controller = new slidebars();
    controller.init();

    $( "#do_drag" ).swipe( {
      swipeStatus: function ( event, phase, direction, distance, duration, fingers ) {
        if ( phase == "move" && direction == "right" ) {
          openAside();
          return false;
        }
        if ( phase == "move" && direction == "left" ) {
          closeAside();
          return false;
        }
      }
    } );
    $( "#do_drag_search_open" ).swipe( {
      swipeStatus: function ( event, phase, direction, distance, duration, fingers ) {
        if ( phase == "move" && direction == "left" ) {
          openAsideSearch();
          return false;
        }
        if ( phase == "move" && direction == "right" ) {
          closeAsideSearch();
          return false;
        }
      }
    } );

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
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, 'brayan', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
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
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, 'brayan', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
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
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, 'brayan', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
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
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, 'brayan', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
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
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, 'brayan', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
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
      $( "#postContainer" ).append( createpost( data[ index ].title, data[ index ].description, 'brayan', data[ index ].date, data[ index ].categoria, data[ index ].image, data[ index ].user_pic ) );
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
  $.ajax( {
    data: {
      "reg_soc": 1,
      "name": $( "#nameSocio" ).val(),
      "phone": $( "#telSocio" ).val(),
      "mail": $( "#mailSocio" ).val(),
      "negocio": $( "#nameNegocio" ).val()
        //"pass": $("#passwSocio").val(),
        //"img": document.getElementById("imgProfile").files[0].name
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  } ).done( function ( data ) {
    data = $.parseJSON( data );
    console.log( data );
    if ( data.Y == "Y" ) {
      //alert('Registrado');
      //window.location.replace("profile.php");
      $( "#registerSocio" ).submit();
    }
    else {
      alert( 'Erro usuario no registrado' );
    }
  } );
} );

//registrar publicacion

$( "#createPost" ).on( 'click', function () {
  $.ajax( {
    data: {
      "create_Post": 1,
      "title": $( "#postTitle" ).val(),
      "description": $( "#postDescription" ).val(),
      "date": $( "#postDate" ).val(),
      "category": $( '#category' ).val(),
      "file": document.getElementById( "file" ).files[ 0 ].name
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  } ).done( function ( data ) {
    if ( data ) {
      $( "#formPost" ).submit();
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
      //console.log(data);
      window.location.replace( "profile.php" );
    }
    else {
      console.log( 'problemas al iniciar session' );
      console.log(data);
    }
  } );
} );

$( ".profileU" ).on( 'click', function () {
  $( this ).submit();
} );

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
  var profilePic;
  if (document.getElementById( "fileToUpload" ).files[ 0 ].name == undefined) {
    profilePic = "01.png";
  } else {
    profilePic = document.getElementById( "fileToUpload" ).files[ 0 ].name;
  }
  $.ajax( {
    data: {
      "editProfile": 1,
      "name": $( "#nameP" ).val(),
      "phone": $( "#phoneP" ).val(),
      "mail": $( "#emailP" ).val(),
      "file": profilePic
    },
    url: '../classes/ajaxUsers.php',
    type: 'post'
  } ).done( function ( data ) {
    if ( data ) {
      $( "#editProfileF" ).submit();
    }
  } );

} );

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
