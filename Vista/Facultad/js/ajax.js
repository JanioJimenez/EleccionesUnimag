function reload(){
	$.ajax({
		url: '/eleccionesUnimag/Controlador/ControladorFacultad.php',
		data : {tipo : 'listar'},
		type : 'POST',
		success: function(res){
			$('.cuerpoTabla').html(res);
		}
	})
}

$.holdReady(true);
reload();
$.holdReady(false);

$(document).ready(function() {
	
	$('#add-form').submit(function(e){
		e.preventDefault();
		var nombre = $('input[name="nombre"]').val();
		$.ajax({
			url: '/eleccionesUnimag/Controlador/ControladorFacultad.php',
			data : {tipo : 'agregar', nombre: nombre},
			type : 'POST',
			success: function(res){
				if(res == 'Error'){
					$('.error-create').html('Error al ingresar la facultad');
				}else{
					 Materialize.toast('Nombre de facultad creado exitosamente!', 2000) 
					 reload();
					 $('#modal1').modal('close');
					 $('.error-create').html('');
					 $('input[name="nombre"]').val(' ');
				}

			}
		})
	})

	$('#edit-form').submit(function(e){
		e.preventDefault();
		var nombreEditar = $('input[name="nombreEditar"]').val();
		$.ajax({
			url: '/eleccionesUnimag/Controlador/ControladorFacultad.php',
			data : {tipo : 'editar', id: pk1 , nombreEditar: nombreEditar},
			type : 'POST',
			success: function(res){
				if(res == 'Error'){
					$('.error-create').html('Error al ingresar Facultad');
				}else{
					 Materialize.toast('Facultad editado exitosamente!', 2000) 
					 reload();
					 $('#modal2').modal('close');
					 $('.error-create').html('');
				}

			}
		})
	})

	$(document).on('click', '.borrar' ,function(){	
		var id = $(this).closest('tr').find('#id').html();
		$.ajax({
			url: '/eleccionesUnimag/Controlador/ControladorFacultad.php',
			data : {tipo : 'eliminar',id: id},
			type : 'POST',
			success: function(res){
				if(res == 'Error'){
					Materialize.toast('Error al eliminar el rol, Verifica que no este siendo usado!', 2000);
				}else{
					Materialize.toast('Facultad eliminado exitosamente!', 2000);
					reload();
				}
			}
		})
	})


	$(document).on('click', '.editar' ,function(){
		    pk1 = $(this).closest('tr').find('#id').html();
		    pk2 = $(this).closest('tr').find('#nombre').html();

			$('input[name="nombreEditar"]').val(pk2);
	});










});