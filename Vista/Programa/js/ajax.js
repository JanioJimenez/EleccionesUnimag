function reload() {
    $.ajax({
        url: '/eleccionesUnimag/Controlador/ControladorPrograma.php',
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
            url: '/eleccionesUnimag/Controlador/ControladorPrograma.php',
            data: { tipo: 'listarPrograma' },
            type: 'POST',
            success: function(res) {
                if (res == 'No hay datos') {
                    $('.selectFacultad').html('Esta tabla usa datos de otra tabla porfavor llene la otra tabla');
                } else {
                    $('.selectFacultad').html(res);
                }

                $('select').material_select();
            }
        })
    })

    $('#add-form').submit(function(e) {
        e.preventDefault();
        var nombre = $('input[name="nombre"]').val();
        var facultad = $('#selectFacultad').val();
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorPrograma.php',
            data: { tipo: 'agregar', nombre: nombre, facultad: facultad },
            type: 'POST',
            success: function(res) {
                if (res == 'Error') {
                    $('.error-create').html('Error al ingresar el nuevo programa');
                } else {
                    Materialize.toast('Programa creado exitosamente!', 2000)
                    reload();
                    $('#modal1').modal('close');
                    $('.error-create').html('');
                    $('input[name="nombre"]').val(' ');

                }

            }
        })
    })

    $('#edit-form').submit(function(e) {
        e.preventDefault();
        var nombreEditar = $('input[name="nombreEditar"]').val();
        var facultadEditar = $('#selectFacultadEditar').val();
        console.log(nombreEditar, facultadEditar, pk1)
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorPrograma.php',
            data: { tipo: 'editar', idPrograma: pk1, nombreEditar: nombreEditar, facultadEditar:facultadEditar },
            type: 'POST',
            success: function(res) {
                if (res == 'Error') {
                    $('.error-create').html('Error al ingresar el nuevo programa');
                } else {
                    Materialize.toast('programa editado exitosamente!', 2000)
                    reload();
                    $('#modal2').modal('close');
                    $('.error-create').html('');
                }

            }
        })
    })

    $(document).on('click', '.borrar', function() {
        var idPrograma = $(this).closest('tr').find('#idPrograma').html();
        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorPrograma.php',
            data: { tipo: 'eliminar', idPrograma: idPrograma },
            type: 'POST',
            success: function(res) {
                if (res == 'Error') {
                    Materialize.toast('Error al eliminar el programa, Verifica que no este siendo usada!', 2000);
                } else {
                    Materialize.toast('Programa eliminado exitosamente!', 2000);
                    reload();
                }
            }
        })
    })


    $(document).on('click', '.editar', function() {
        pk1 = $(this).closest('tr').find('#idPrograma').html();
        pk2 = $(this).closest('tr').find('#nombre').html();
        idFac = $(this).closest("tr").find("#facultad_id").text()
       
        $('input[name="nombreEditar"]').val(pk2);


        $.ajax({
            url: '/eleccionesUnimag/Controlador/ControladorPrograma.php',
            data: { tipo: 'listarFacultadEditar', idFac:idFac },
            type: 'POST',
            success: function(res) {
                
                if (res == 'No hay datos') {
                    $('.selectFacultadEditar').html('Esta tabla usa datos de otra tabla porfavor llene la otra tabla');
                } else {
                    $('.selectFacultadEditar').html(res);
                }

                $('select').material_select();
            }
        })
    });










});