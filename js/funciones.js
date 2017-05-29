$(document).ready(function () {
    cargar_usuarios();
    verificalogin();
    //*********************BOTONES OCULTOS***********************
    $("#bt_editar_user").hide();

//**************************LOGIN********************
    $("#bt_conectar").button().click(function () {
        conectar();
    });

    $("a[id=salir]").click(function (e) {
        salir();
    });

//**************************MANTENEDOR USUARIOS********************
    $("a[id=menu_usuario]").click(function (e) {
        cargar_usuarios();
    });

    $("#bt_guardar_user").button().click(function () {
        insert_usuario();
    });

    $("#bt_limpiar_user").button().click(function () {
        limpiar_usuario();
    });
    $("#bt_editar_user").button().click(function () {
        update_usuario();
    });

    $("#mostar_pass").mousedown(function () {
        mostrarPass();
    });
    $("#mostar_pass").mouseup(function () {
        ocultarPass();
    });
});

/////////////////////////////////////////FUNCIONES//////////////////////////////////////////////////
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
                if (datos.tipo == 0) {
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
        $("#msg_error").html("<span class='glyphicon glyphicon-exclamation-sign'>&nbsp;</span><strong>¡Ingresar Usuario y Contraseña!</strong>");
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
                    $('body').css('background-color', 'white');
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

//******************************************MANTENEDOR USUARIOS*************************************************

function cargar_usuarios()
{
    $.post(
            base_url + "controlador/cargar_usuarios",
            {},
            function (ruta, datos) {
                $("#lista_usuarios").html(ruta, datos);
            });
}

function limpiar_usuario() {
    $("#bt_editar_user").hide(500);
    $("#bt_guardar_user").show(1000);
    $("#id_user").val("");
    $("#user").val("");
    $("#pass").val("");
    $("#nombre_user").val("");
    $("#apellido_user").val("");
    $("#tipo_user").val("1");
    foco('user');
}


function insert_usuario() {
    var user = $("#user").val().toUpperCase();
    var pass = $("#pass").val();
    var nombre = $("#nombre_user").val().toUpperCase();
    var apellido = $("#apellido_user").val().toUpperCase();
    var tipo = $("#tipo_user").val();
    if (nombre != "" && user != "" && pass != "" && apellido != "") {
        $.post(base_url + "controlador/insert_usuario", {user: user, pass: pass, nombre: nombre, apellido: apellido, tipo: tipo},
        function (datos) {
            if (datos.valor == 1) {
                $("#msg_success_user").hide('fast');
                $("#msg_success_user").show('fast');
                $("#msg_success_user").html("<span class='glyphicon glyphicon-ok'>&nbsp;</span><strong>" + datos.msg + "</strong>");
                $("#msg_success_user").delay(1000).hide(1000);
                limpiar_usuario();
                cargar_usuarios();
            } else {
                $("#msg_error_user").hide('fast');
                $("#msg_error_user").show('fast');
                $("#msg_error_user").html("<span class='glyphicon glyphicon-exclamation-sign'>&nbsp;</span><strong>" + datos.msg + "</strong>");
                $("#msg_error_user").delay(1000).hide(1000);
            }
        }, "json"
                );
    } else {
        $("#msg_error_user").hide('fast');
        $("#msg_error_user").show('fast');
        $("#msg_error_user").html("<span class='glyphicon glyphicon-exclamation-sign'>&nbsp;</span><strong>¡Complete Todos Los Campos!</strong>");
        $("#msg_error_user").delay(1000).hide(1000);
    }

}

function update_usuario() {
    var id = $("#id_user").val();
    var user = $("#user").val().toUpperCase();
    var pass = $("#pass").val();
    var nombre = $("#nombre_user").val().toUpperCase();
    var apellido = $("#apellido_user").val().toUpperCase();
    var tipo = $("#tipo_user").val();
    if (id != "") {
        if (nombre != "" && user != "" && pass != "" && apellido != "" && tipo != "") {
            $.post(base_url + "controlador/update_usuario", {id: id, user: user, pass: pass, nombre: nombre, apellido: apellido, tipo: tipo},
            function (datos) {
                if (datos.valor == 1) {
                    $("#msg_success_user").hide('fast');
                    $("#msg_success_user").show('fast');
                    $("#msg_success_user").html("<span class='glyphicon glyphicon-ok'>&nbsp;</span><strong>" + datos.msg + "</strong>");
                    $("#msg_success_user").delay(1000).hide(1000);
                    limpiar_usuario();
                    cargar_usuarios();
                } else {
                    $("#msg_error_user").hide('fast');
                    $("#msg_error_user").show('fast');
                    $("#msg_error_user").html("<span class='glyphicon glyphicon-exclamation-sign'>&nbsp;</span><strong>" + datos.msg + "</strong>");
                    $("#msg_error_user").delay(1000).hide(1000);
                }
            }, "json"
                    );
        } else {
            $("#msg_error_user").hide('fast');
            $("#msg_error_user").show('fast');
            $("#msg_error_user").html("<span class='glyphicon glyphicon-exclamation-sign'>&nbsp;</span><strong>¡Complete Todos Los Campos!</strong>");
            $("#msg_error_user").delay(1000).hide(1000);
        }
    } else {
        $("#msg_error_user").hide('fast');
        $("#msg_error_user").show('fast');
        $("#msg_error_user").html("<span class='glyphicon glyphicon-exclamation-sign'>&nbsp;</span><strong>¡Debe seleccionar un usuario para editar !</strong>");
        $("#msg_error_user").delay(1000).hide(1000);
    }
}

function  delete_usuario(id)
{
    var id = id;
    $("#Modal_user").modal('show');
    $("#aceptar_user").click(function () {
        $.post(base_url + "controlador/delete_usuario", {id: id},
        function (datos) {
            if (datos.valor == 1) {
                cargar_usuarios();
            }
        }, "json"
                );
    });

}

function  seleccionar_usuario(id)
{
    var id = id;
    $.post(base_url + "controlador/seleccionar_usuario", {id: id},
    function (datos) {
        if (datos.valor == 1) {
            $("#bt_guardar_user").hide(500);
            $("#bt_editar_user").show(1000);
            $("#id_user").val(datos.id);
            $("#user").val(datos.user);
            $("#pass").val(datos.pass);
            $("#nombre_user").val(datos.nombre);
            $("#apellido_user").val(datos.apellido);
            $("#tipo_user").val(datos.tipo);
            foco('user');
            $('html, body').animate({scrollTop: 0}, 800);
        }
    }, "json"
            );
}

//*****************************************************UTLIDADES******************************************
//------------------FOCO--------------------
function foco(e) {
    document.getElementById(e).focus();
}
//---------------------CAMBIAR INPUT-------------------------
function mostrarPass() {
    var contenido = document.getElementById("pass");
    contenido.setAttribute("type", "text");
    foco('pass');
}

function ocultarPass() {
    var contenido = document.getElementById("pass");
    contenido.setAttribute("type", "password");
    foco('pass');

}
