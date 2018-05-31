jQuery(document).on('submit', '#formularioInicioSesion', function(event){

	event.preventDefault();

	jQuery.ajax({
		url : 'PHP/inicioSesion.php',
		type : 'POST',
		dataType : 'json',
		data : $(this).serialize(),
	})
	.done(function(respuesta) {
		//Especificamos como actuar con los datos recibidos
		if(!respuesta.error){
				if(respuesta.tipo == "usuario"){
					location.href = 'indexUsuario.html';
				}else if (respuesta.tipo == "admin"){
					location.href = 'indexAdmin.html';
				}else{
				window.alert("Usuario o contraseña incorrectos.");
			}
		}
	})
});