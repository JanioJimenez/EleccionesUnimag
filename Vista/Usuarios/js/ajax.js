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
                    $('.selectEstado').html('Esta tabla usa datos de otra tabla porfavor llene la otra tabla');
                    $('.selectMesa').html('Esta tabla usa datos de otra tabla porfavor llene la otra tabla');
                    $('.selectFacultad').html('Esta tabla usa datos de otra tabla porfavor llene la otra tabla');
                } else {
                    $('.selectRoles').html(res);
                    $('.selectEstado').html(res);
                    $('.selectMesa').html(res);
                    $('.selectFacultad').html(res);
                }

                $('select').material_select();
            }
        })
    })

    $('#add-form').submit(function(e) {
        e.preventDefault();
        var nombre = $('input[name="nombre"]').val();
        var apellido = $('input[name="apellido"]').val();
        var codigo = $('input[name="codigo"]').val();
        var pass = $('input[name="pass"]').val();
        var idRol = $('#selectRoles').val();
        var idEstado = $('#selectEstado').val();
        var idMesa = $('#selectMesa').val();
        var idFacultad = $('#selectFacultad').val();
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
            data: { tipo: 'agregar', nombre: nombre,apellido: apellido, codigo: codigo, pass: pass, idRol: idRol, idEstado: idEstado, idMesa: idMesa, idFacultad: idFacultad},
            type: 'POST',
            success: function(res) {
                if (res == 'Error') {
                    $('.error-create').html('Hubo un error al ingresar el nuevo rol');
                } else {
                    Materialize.toast('Rol creado exitosamente!', 2000)
                    reload();
                    $('#modal1').modal('close');
                    $('.error-create').html('');
                    $('input[name="nombre"]').val(' ');
                    $('input[name="apellido"]').val(' ');
                    $('input[name="codigo"]').val(' ');
                    $('input[name="pass"]').val(' ');
                }

            }
        })
    })

    $('#edit-form').submit(function(e) {
        e.preventDefault();
        var nombreEditar = $('input[name="nombreEditar"]').val();
        var apellidoEditar = $('input[name="apellidoEditar"]').val();
        var codigoEditar = $('input[name="codigoEditar"]').val();
        var passEditar = $('input[name="passEditar"]').val();
        var idRolEditar = $('#selectRolesEditar').val();
        var idEstadoEditar = $('#selectEstadoEditar').val();
        var idMesaEditar = $('#selectMesaEditar').val();
        var idFacultadEditar = $('#selectFacultadEditar').val();
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
            data: { tipo: 'editar', id: pk1, nombreEditar: nombreEditar, apellidoEditar: apellidoEditar,
                    codigoEditar: codigoEditar, passEditar: passEditar, idRolEditar: idRolEditar, idEstadoEditar: idEstadoEditar,
                    idMesaEditar: idMesaEditar, idFacultadEditar: idFacultadEditar},
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
        var idUsuario = $(this).closest('tr').find('#id').html();
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorUsuario.php',
            data: { tipo: 'eliminar', id: id },
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
        pk1 = $(this).closest('tr').find('#id').html();
        pk2 = $(this).closest('tr').find('#nombre').html();
        pk3 = $(this).closest('tr').find('#apellido').html();
        pk4 = $(this).closest('tr').find('#codigo').html();
        pk5 = $(this).closest('tr').find('#pass').html();
        $('input[name="nombreEditar"]').val(pk2);
        $('input[name="apellidoEditar"]').val(pk3);
        $('input[name="codigoEditar"]').val(pk4);
        $('input[name="passEditar"]').val(pk5);


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