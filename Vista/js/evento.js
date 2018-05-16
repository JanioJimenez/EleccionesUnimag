//funcion para mostrar formulario
$('#clic').on('click', function () {
	$('#display').css('display', 'flex');
});


$('.cajaJurado').on('click', function(){
	$('#display').css('display', 'flex');
});

$('#inicioJurado').on('click', function(){
	$('#display').css('display', 'flex');
});

let hora = new Date();
if($('#hora')[0]!=null){
	$('#hora')[0].textContent = hora.getHours()+":"+hora.getMinutes()+":"+hora.getSeconds();
	setInterval(function(){
		hora = new Date();
		$('#hora')[0].textContent = hora.getHours()+":"+hora.getMinutes()+":"+hora.getSeconds();
	}, 1000);
}

/*
('#enviar').on('click',function(){
	var cedula = $('#cedula').val()
	var password = $('#contraseña').val()
	$.ajax({
		type: "POST",
		contentType: "application/json; charset=utf-8",
		url: "./servidor/login.php",
		data: {cedula:cedula,password:password},
		success: function (result) {
			console.log(result)
		}
   });
})*/


$('#cerrarSesion').on('click', function (e) {
	window.location.href = '/eleccionesUnimag/';
});

$('#cedula').on('click', function () {
	$('#errorUsuario').css('display', 'none');
});

$('#contraseña').on('click', function () {
	$('#errorUsuario').css('display', 'none');
});

$('#cerrar').on('click', function (ocultar) {
	console.log(ocultar);
	$('#display').css('display', 'none');
});



$('#targeton1').on('click', function (e) {
	let voto = e.target;
	$('#confir').css('display', 'flex');
	$('.marca1').css('display', 'flex');

	$('#cancelar').on('click', function () {
		$('#confir').css('display', 'none');
		$('.marca1').css('display', 'none');
	});
 
	$('#aceptar').on('click', function () {
		console.log("dsajdhj");
		window.location.href = 'certificado.html';
	});

});

$('#targeton2').on('click', function (e) {
	let voto = e.target;
	$('#confir').css('display', 'flex');
	$('.marca2').css('display', 'flex');

	$('#cancelar').on('click', function () {
		$('#confir').css('display', 'none');
		$('.marca2').css('display', 'none');
	});

	$('#aceptar').on('click', function () {
		window.location.href = 'certificado.html';
	});

});

$('#targeton3').on('click', function (e) {
	let voto = e.target;
	$('#confir').css('display', 'flex');
	$('.marca3').css('display', 'flex');

	$('#cancelar').on('click', function () {
		$('#confir').css('display', 'none');
		$('.marca3').css('display', 'none');
	});

	$('#aceptar').on('click', function () {
		window.location.href = 'certificado.html';
	});

});

$('#targeton4').on('click', function (e) {
	let voto = e.target;
	$('#confir').css('display', 'flex');
	$('.marca4').css('display', 'flex');

	$('#cancelar').on('click', function () {
		$('#confir').css('display', 'none');
		$('.marca4').css('display', 'none');
	});

	$('#aceptar').on('click', function () {
		window.location.href = 'certificado.html';
	});

});

$('#targeton5').on('click', function (e) {
	let voto = e.target;
	$('#confir').css('display', 'flex');
	$('.marca5').css('display', 'flex');

	$('#cancelar').on('click', function () {
		$('#confir').css('display', 'none');
		$('.marca5').css('display', 'none');
	});

	$('#aceptar').on('click', function () {
		window.location.href = 'certificado.html';
	});

});

$('#targeton6').on('click', function (e) {
	let voto = e.target;
	$('#confir').css('display', 'flex');
	$('.marca6').css('display', 'flex');

	$('#cancelar').on('click', function () {
		$('#confir').css('display', 'none');
		$('.marca6').css('display', 'none');
	});

	$('#aceptar').on('click', function () {
		window.location.href = 'certificado.html';
	});
});

// $('#cerrarSesion').on('click', function () {
// 	window.location.href = 'index.html';
// });

/*$.get("../json/jurados.json", function (jdato){
	$('#enviar').on('click', function(){

		var ccj = $('#cedula').val();
		var contra = $('#contraseña').val();
		
		for (let jurado of jdato["jurados"]) {
			//console.log(usuario.cedula);
			//console.log(usuario.password);
			if(jurado.cedula == ccj && jurado.password == contra ){
				window.location.href = 'listaVotante.html';
			}
			else {
				$('#errorUsuario').css('display', 'flex');
				console.log("Error de usuario o contraseña");
			}

		}
	});
});*/

var input;
var inputs = [];
$("#busCedula").on("click", function(e){
	e.preventDefault();
	let cedulas = $("span.cedula");
	let cedBuscada = $("#cedulaBuscada").val();
	console.log(cedBuscada.length)
	if(cedBuscada.length>0){
		for(let cedula of cedulas){
			if(cedBuscada == cedula.textContent){
				$(cedula).addClass('encontrado');
				inputs = $(cedula).parent().siblings().find('input[type="text"]');
				input = $(cedula).parent().siblings('div.listaOrden').find('input')[0];
				inputFn();
				break;
			}
		}
	}
});
function inputFn(){
	$(input).on('change', function(e){
		for(let inp of inputs){
			inp.disabled = false;
		}
	})
}

function jurado(){
	let ju = JSON.parse(localStorage.getItem('juradoVotacion'));
	$('#jurado')[0].textContent = ju['nombre'];
}