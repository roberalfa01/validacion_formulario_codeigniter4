
$(document).ready(function(){

    $('#form_contacto').submit(function(e){
        e.preventDefault();
        var correo = $('#correo').val();
        var nombre = $('#nombre').val();
        var mensaje_form = $('#mensaje_form').val();
        if (correo == null || correo == "")
        {
            alert("Debe escribir su correo");
            $('#mensaje').html('');
            return false;
        }else if(nombre == null || nombre == "")
        {
            alert("Debe escribir su nombre");
            $('#mensaje').html('');
            return false;
        }else if(mensaje_form == null || mensaje_form == "")
        {
            alert("Debe escribir su mensaje");
            $('#mensaje').html('');
            return false;
        }else{
            $.ajax({
                url:$(this).attr('action'),
                type:$(this).attr('method'),
                data:$(this).serialize(),
                success: function(response){
                    let respuesta = JSON.parse(response);
                    if(respuesta[1] == false){
                        $('#mensaje').html("<p class='text-center alert alert-danger'>"+respuesta[0]+"</p>");
                    }else{
                       $('#mensaje').html("<p class='text-center alert alert-success'>"+respuesta[0]+"</p>");
                    }

                    $("#form_contacto")[0].reset();
                },
                error: function() {
                alert('Error Intente enviar su mensaje otra vez!');
                }
            });
        }
    });

    $('#form_contacto_usuario').submit(function(e){
        e.preventDefault();
        var correo = $('#correo').val();
        var nombre = $('#nombre').val();
        var mensaje_form = $('#mensaje_form').val();
        if (correo == null || correo == "")
        {
            alert("Debe escribir su correo");
            $('#mensaje').html('');
            return false;
        }else if(nombre == null || nombre == "")
        {
            alert("Debe escribir su nombre");
            $('#mensaje').html('');
            return false;
        }else if(mensaje_form == null || mensaje_form == "")
        {
            alert("Debe escribir su mensaje");
            $('#mensaje').html('');
            return false;
        }else{
            $.ajax({
                url:$(this).attr('action'),
                type:$(this).attr('method'),
                data:$(this).serialize(),
                success: function(response){
                    let respuesta = JSON.parse(response);
                    if(respuesta[1] == false){
                        $('#mensaje').html("<p class='text-center alert alert-danger'>"+respuesta[0]+"</p>");
                    }else{
                       $('#mensaje').html("<p class='text-center alert alert-success'>"+respuesta[0]+"</p>");
                    }

                    $("#form_contacto")[0].reset();
                },
                error: function() {
                alert('Error Intente enviar su mensaje otra vez!');
                }
            });
        }
    });
        
});
