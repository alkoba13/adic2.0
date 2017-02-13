$('#loginAdmin').on('click', function(){
      $.ajax({
        data:  {
        "loginAdmin" : 1,
        "user": $("#user").val(),
        "pass": $("#pass").val()
        },
        url: 'ajax/adminAjax.php',
        type: 'post'
      }).done(function(data){
        if (data != 0) {
         	window.location.replace("main.php");
        }else{
          alert('problemas al iniciar session');
        }
      });
});