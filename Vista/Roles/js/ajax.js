function reload(){
	$.ajax({
		url: '/eleccionesUnimag/Controlador/ControladorRoles.php',
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
		var idRol = $('input[name="idRol"]').val();
		$.ajax({
			url: '/eleccionesUnimag/Controlador/ControladorRoles.php',
			data : {tipo : 'agregar',idRol: idRol},
			type : 'POST',
			success: function(res){
				if(res == 'Error'){
					$('.error-create').html('Hubo un error al ingresar el nuevo productor');
				}else{
					 Materialize.toast('Rol creado exitosamente!', 2000) 
					 reload();
					 $('#modal1').modal('close');
					 $('.error-create').html('');
					 $('input[name="idRol"]').val(' ');
				}

			}
		})
	})

	$('#edit-form').submit(function(e){
		e.preventDefault();
		var idRolEditar = $('input[name="idRolEditar"]').val();
		$.ajax({
			url: '/eleccionesUnimag/Controlador/ControladorRoles.php',
			data : {tipo : 'editar', idRol: idRol },
			type : 'POST',
			success: function(res){
				if(res == 'Error'){
					$('.error-create').html('Hubo un error al ingresar el nuevo productor');
				}else{
					 Materialize.toast('Rol editado exitosamente!', 2000) 
					 reload();
					 $('#modal2').modal('close');
					 $('.error-create').html('');
				}

			}
		})
	})

	$(document).on('click', '.borrar' ,function(){	
		var idroles = $(this).closest('tr').find('#idRol').html();
		$.ajax({
			url: '/eleccionesUnimag/Controlador/ControladorRoles.php',
			data : {tipo : 'eliminar',idRol: idRol},
			type : 'POST',
			success: function(res){
				if(res == 'Error'){
					Materialize.toast('Error al eliminar el rol, Verifica que no este siendo usado!', 2000);
				}else{
					Materialize.toast('Rol eliminado exitosamente!', 2000);
					reload();
				}
			}
		})
	})


	$(document).on('click', '.editar' ,function(){
		    pk1 = $(this).closest('tr').find('#idRol').html();

			$('input[name="idRolEditar"]').val(pk1);
	});










});