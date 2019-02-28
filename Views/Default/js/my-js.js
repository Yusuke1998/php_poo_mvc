$('document').ready(function(){
	$('#submit').click(function(E){
		E.preventDefault();
		var email = $('#email').val();
		var password = $('#password').val();
		var url = 'http://localhost/JHONNY/practicas_php_basico/php_poo_mvc/User/userLogin';
		var data = {email:email, password:password}

		$.post(url,data,function(data){
			if (data == 1) {
				alert('Bienvenido!');
				document.location = 'http://localhost/JHONNY/practicas_php_basico/php_poo_mvc/Principal/principal';
			}else{
				alert('Verifique su contraseña y/o correo!');
			}
		});
	});
});