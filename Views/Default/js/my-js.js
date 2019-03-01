$('document').ready(function(){

	// Acceso de usuario
	$('#submit').click(function(E){
		E.preventDefault();
		var email = $('#email').val();
		var password = $('#password').val();
		var data = {email:email, password:password};
		$.post(loginUrl,data,function(data){
			if (data == 1) {
				alert('Bienvenido!',data);
				document.location = baseurl+'Principal/principal';
			}else{
				console.log("Error!",data);
				alert('Verifique su contraseña y/o correo!');
			}
		});
	});
	// Acceso de usuario

	// Registro de usuario
	$('#FormSubmit').click(function(e){
		e.preventDefault();
		var registroData = $('#FormSignIn').serialize();
		$.post(registroUrl,registroData,function(response){
			if (response == 1) {
				alert('Registro realizado con exito');
				console.log(response);
				document.location = baseurl+'Index/index';

			}else if(response == 2) {
				alert('El correo electronico ya esta en uso!');
			}else{
				console.log(response);
				alert('Verifique los datos enviados!');
			}
		});
	});
	// Registro de usuario
});