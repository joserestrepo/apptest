$('#formLogin').on('submit',function(event){
    event.preventDefault();
    var datos = {
      password : $('#password').val(),
      usuario: $('#email').val()
    }
    if(datos.codigo !="" && datos.password!=""){
        
        if(datos.usuario =="prueba@prueba.com" && datos.password=="prueba"){
            swal(
                'BIENVENIDO',
                'You clicked the button!',
                'success'
            ).then(function(){
                $.ajax({
                    type    : 'POST',
                    url     : 'controladorLogin',
                    data    : '',
                    dataType : 'text',
                    success: function(data){
                       
                    }
                })
                window.location.href="test";
            }) 
        }else{
            swal({
                type: 'error',
                title: 'Oops...',
                text: 'Usuario incorrecto',
                footer: '<a href>Why do I have this issue?</a>'
              })
        }
        
    }else{
      swal({
        type: 'error',
        title: 'Oops...',
        text: 'Los campos son obligatorios',
        footer: '<a href>Why do I have this issue?</a>'
      })
    }
  
  });
