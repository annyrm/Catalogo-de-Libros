$(function () {
    $('#enviar').click(revisaPass);
});

function revisaPass() {
    var pass = $('#pass').val().trim();
    var cpass = $('#cpass').val().trim();
    var usuario = $('#usuario').val().trim();
    if (pass == "" && cpass == "" && usuario == "") {
        alert("Hay campos vacíos en el formulario");
    } else {

        if (pass != cpass) {
            alert('Las contraseñas no coinciden');
        } else {

            //var datos = 'usuario=' + usuario + '&pass=' + pass;
            $.ajax({
                //Objeto de JSON
                //Antes de ejecutar la petición
                //beforeSend: ,
                type: 'post',
                url: 'insertar.php',

                //Enviando al servidor una cadena de datos
                //data: datos,
                //Enviando al servidor un JSON
                //Opción 1
                data: $('#newUser').serialize(),

                //En caso exitoso
                //Respuesta recibe info del servidor
                success: function (respuesta) {
                    $('#info').html(respuesta);
                    alert('Se almacenó correctamente el usuario');

                },
                //Si hay un error
                //XHR: XHtml Request
                //estado: timeout, error, abort, parsererror
                //error: Not found, Internal Server Error, estados HTTP
                error: function (xhr, status, error) {
                    $('#info').html(status, error);
                    alert('No se almacenó correctamente el usuario');
                },
                //Se ejectuta invariablemente habiendo o no error
                //estado: success, notmodified, timeout, error, abort, parsererror
                complete: function (xhr, status) {
                    $(':input').val('');
                    //$('#cpass').val('');
                    //$('#usuario').val('');
                    //$('#info').html(status);
                }
            });
        }
    }
}