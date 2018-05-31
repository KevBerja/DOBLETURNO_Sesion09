$(document).on('ready', funcPrincipal);

function funcPrincipal()
{
	$('#formularioRegistro').on('submit', registrarUsuario);
}

function registrarUsuario(event) 
{

	var datosUsuario =
	{
		'email' : $('#txtEmail').val(),
		'usuario' : $('#txtUsuario').val(),
		'contra' : $('#txtPassword').val()
	};

	$.ajax({
		type : 'POST',
		url : 'PHP/registro.php',
		data : datosUsuario,
		dataType : 'json',
		encode : true
	})
	.done(function(datos) {
		//Especificamos como actuar con los datos recibidos
		if(datos.exito) {
			alert(datos.mensaje);
		}else{
			if(datos.errores.email) {
				alert(datos.errores.email);
			}
			if(datos.errores.usuario) {
				alert(datos.errores.username);
			}
			if(datos.errores.contra) {
				alert(datos.errores.contra);
			}
		}
	});
	event.preventDefault();
}