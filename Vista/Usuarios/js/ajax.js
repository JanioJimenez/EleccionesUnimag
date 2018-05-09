function reload() {
    $.ajax({
        url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
        data: { tipo: 'listar' },
        type: 'POST',
        success: function(res) {
            $('.cuerpoTabla').html(res);
        }
    })
}

$.holdReady(true);
reload();
$.holdReady(false);

$(document).ready(function() {

    $('.agregarButton').click(function() {
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
            data: { tipo: 'listarRoles' },
            type: 'POST',
            success: function(res) {
                if (res == 'No hay datos') {
                    $('.selectRoles').html('Esta tabla usa datos de otra tabla porfavor llene la otra tabla');
                } else {
                    $('.selectRoles').html(res);
                }

                $('select').material_select();
            }
        })
    })

    $('#add-form').submit(function(e) {
        e.preventDefault();
        var nombre1 = $('input[name="nombre1"]').val();
        var nombre2 = $('input[name="nombre2"]').val();
        var apellido1 = $('input[name="apellido1"]').val();
        var apellido2 = $('input[name="apellido2"]').val();
        var email = $('input[name="email"]').val();
        var codigo = $('input[name="codigo"]').val();
        var pass = $('input[name="pass"]').val();
        var rol = $('#selectRoles').val();
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
            data: { tipo: 'agregar', nombre1: nombre1, nombre2: nombre2, apellido1: apellido1,apellido2: apellido2, email: email, codigo: codigo, pass: pass,rol:rol },
            type: 'POST',
            success: function(res) {
                if (res == 'Error') {
                    $('.error-create').html('Hubo un error al ingresar el nuevo rol');
                } else {
                    Materialize.toast('Rol creado exitosamente!', 2000)
                    reload();
                    $('#modal1').modal('close');
                    $('.error-create').html('');
                    $('input[name="nombre1"]').val(' ');
                    $('input[name="nombre2"]').val(' ');
                    $('input[name="apellido1"]').val(' ');
                    $('input[name="apellido2"]').val(' ');
                    $('input[name="email"]').val(' ');
                    $('input[name="codigo"]').val(' ');
                    $('input[name="pass"]').val(' ');

                }

            }
        })
    })

    $('#edit-form').submit(function(e) {
        e.preventDefault();
        var nombre1Editar = $('input[name="nombre1Editar"]').val();
        var nombre2Editar = $('input[name="nombre2Editar"]').val();
        var apellido1Editar = $('input[name="apellido1Editar"]').val();
        var apellido2Editar = $('input[name="apellido2Editar"]').val();
        var emailEditar = $('input[name="emailEditar"]').val();
        var codigoEditar = $('input[name="codigoEditar"]').val();
        var passEditar = $('input[name="passEditar"]').val();
        var rolEditar = $('#selectRolesEditar').val();
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
            data: { tipo: 'editar', idUsuario: pk1, nombre1Editar: nombre1Editar, nombre2Editar: nombre2Editar,
                    apellido1Editar: apellido1Editar, apellido2Editar: apellido2Editar, emailEditar: emailEditar,
                    codigoEditar: codigoEditar, passEditar: passEditar,rolEditar:rolEditar },
            type: 'POST',
            success: function(res) {
                if (res == 'Error') {
                    $('.error-create').html('Hubo un error al ingresar el nuevo usuario');
                } else {
                    Materialize.toast('Rol editada exitosamente!', 2000)
                    reload();
                    $('#modal2').modal('close');
                    $('.error-create').html('');
                }

            }
        })
    })

    $(document).on('click', '.borrar', function() {
        var idUsuario = $(this).closest('tr').find('#idUsuario').html();
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
            data: { tipo: 'eliminar', idUsuario: idUsuario },
            type: 'POST',
            success: function(res) {
                if (res == 'Error') {
                    Materialize.toast('Error al eliminar el rol, Verifica que no este siendo usada!', 2000);
                } else {
                    Materialize.toast('Rol eliminada exitosamente!', 2000);
                    reload();
                }
            }
        })
    })


    $(document).on('click', '.editar', function() {
        pk1 = $(this).closest('tr').find('#idUsuario').html();
        pk2 = $(this).closest('tr').find('#nombre1').html();
        pk3 = $(this).closest('tr').find('#nombre2').html();
        pk4 = $(this).closest('tr').find('#apellido1').html();
        pk5 = $(this).closest('tr').find('#apellido2').html();
        pk6 = $(this).closest('tr').find('#email').html();
        pk7 = $(this).closest('tr').find('#codigo').html();
        pk8 = $(this).closest('tr').find('#pass').html();
        $('input[name="nombre1Editar"]').val(pk2);
        $('input[name="nombre2Editar"]').val(pk3);
        $('input[name="apellido1Editar"]').val(pk4);
        $('input[name="apellido2Editar"]').val(pk5);
        $('input[name="emailEditar"]').val(pk6);
        $('input[name="codigoEditar"]').val(pk7);
        $('input[name="passEditar"]').val(pk8);


        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
            data: { tipo: 'listarRolesEditar' },
            type: 'POST',
            success: function(res) {
                console.log("hola");
                if (res == 'No hay datos') {
                    $('.selectRolesEditar').html('Esta tabla usa datos de otra tabla porfavor llene la otra tabla');
                } else {
                    $('.selectRolesEditar').html(res);
                }

                $('select').material_select();
            }
        })
    });










});