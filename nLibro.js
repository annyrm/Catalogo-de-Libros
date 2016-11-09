$(function () {
    $('#enviar').click(nuevoLibro);
});

function nuevoLibro() {
    var titulo = $('#titulo').val().trim();
    var autor = $('#autor').val().trim();
    var edicion = $('#edicion').val().trim();
    var editorial = $('#editorial').val().trim();
    var año = $('#año').val().trim();
    var isbn = $('#isbn').val().trim();
    var idioma = $('#idioma').val().trim();
    var pags = $('#pags').val().trim();
    var desc = $('#desc').val().trim();
    var codigo = $('#codigo').val().trim();
    var id = $('#id').val().trim();


    if (titulo == "" && autor == "" && edicion == "" && editorial == "" && año == "" && isbn == "" && idioma == "" && pags == "" && desc == "" && codigo == "" && id == "") {
        alert("Hay campos vacíos en el formulario");
    } else {
        $.ajax({
            //Objeto de JSON
            //Antes de ejecutar la petición
            //beforeSend: ,
            type: 'post',
            url: 'insertarLibro.php',

            //Enviando al servidor una cadena de datos
            //data: datos,
            //Enviando al servidor un JSON
            //Opción 1
            data: $('#newBook').serialize(),
            //Opción 2
            //			data: {
            //				usuario: u,
            //				pass: p,
            //				cpass: cpass
            //			},
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