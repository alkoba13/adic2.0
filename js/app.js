/*variables de session*/
var email;
var token;
var name;
/**********************/
$(document).ready(function() {
	loaderMain();
	function loaderMain(){
		is_logged_in();
	}
	function is_logged_in(){
		email=localStorage.email;
		name=localStorage.name;
		token=localStorage.token;

		if (token!==""||email!==""){
			var data = {'action': 'sesion','token':token,'user_email':email};
			$.ajax({
				type : 'POST',
				crossDomain: true,			
				url  : '../classes/ajaxUsers.php',
				dataType: "json",
				data : data,
				cache: false,
			})
			.done(function( data, textStatus, jqXHR ) {
				if(data.continuar==="ok"){
				/*
				logeado
				*/
				$.mobile.changePage("#main");
				$("#saludo").html('hola '+name);
			}
			else{
				if(data.error!="error")
				{
					/* error 
					$("#error").fadeIn(1000, function(){      
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data.mensaje+' !</div>');
						$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
					});*/
					$.mobile.changePage("#login");
					
				}				
			}
			
		})
			.fail(function( jqXHR, textStatus, errorThrown ) {
				$.mobile.changePage("#login");
			});
		}
		else{
		/* no logueado*/
		$.mobile.changePage("#login");
		
		}
	}
});