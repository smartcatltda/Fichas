$(document).ready(function () {
    $('#tabla_usuarios').DataTable();
    verificalogin();

    $("#bt_conectar").button().click(function () {
        conectar();
    });

    $("a[id=salir]").click(function (e) {
        salir();
    });


});

//******************************************LOGIN*************************************************
function conectar()
{
    var user = $("#user_login").val();
    var pass = $("#pass_login").val();
    if (user != '' && pass != '')
    {
        $.post(base_url + "controlador/conectar",
                {user: user, pass: pass},
        function (datos)
        {
            if (datos.valor == 0)
            {
                $("#msg_error").hide('fast');
                $("#msg_error").show('fast');
                $("#msg_error").html("<span class='glyphicon glyphicon-exclamation-sign'>&nbsp;</span><strong>" + datos.mensaje + "</strong>");
                $("#msg_error").delay(1000).hide(1000);
            }
            else
            {
                if (datos.permiso == 1) {
                    $("#login").hide('fast');
                    $("#contenido").show('fast');
                    $("#nombre_login").html(" " + datos.nombre + " " + datos.apellido);
                }
            }
        },
                'json'
                );
    }
    else {
        $("#msg_error").hide('fast');
        $("#msg_error").show('fast');
        $("#msg_error").html("<span class='glyphicon glyphicon-exclamation-sign'>&nbsp;</span><strong>Ingresar Usuario y Contraseña</strong>");
        $("#msg_error").delay(1000).hide(1000);
    }
}

function verificalogin()
{
    $.post(
            base_url + "controlador/verificalogin",
            {},
            function (datos) {
                if (datos.valor == 0)
                {
                    $("#user").val("");
                    $("#pass").val("");
                    $("#contenido").hide('fast');
                    $('body').css('background-image', 'url(css/images/fondo.jpg)');
                    $("#login").show('fast');
                }
                
                else
                {
                    $("#login").hide('fast');
                    $("#contenido").show('fast');
                    $("#nombre_login").html(" " + datos.nombre + " " + datos.apellido);
                }
            }, 'json'
            );
}

function salir()
{
    $.post(base_url + "controlador/salir",
            {},
            function ()
            {
                window.location.reload();
            }
    );
}