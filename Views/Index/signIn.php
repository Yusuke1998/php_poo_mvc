<div class="container">
	<div class="col-md-6 mx-auto">
		<p align="center" class="h3 mt-2">Registro de usuario</p>
		<form class="form mt-3" action="" method="post" id="FormSignIn">
			<div class="form-group">
				<input class="form-control" type="text" name="username" id="username" value="" placeholder="Nombre de usuario">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="firstname" id="firstname" value="" placeholder="Nombres">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="lastname" id="lastname" value="" placeholder="Apellidos">
			</div>
			<div class="form-group">
				<input class="form-control" type="email" name="email" id="email" value="" placeholder="Correo electronico">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" id="password" value="" placeholder="Contraseña">
			</div>
			<div class="form-group">
				<button type="submit" id="FormSubmit" class="btn btn-success btn-block">Registrar</button>
			</div>
		</form>
	</div>
</div>

<script>
	var baseurl = "<?php echo URL; ?>";
	var registroUrl = "<?php echo URL; ?>User/signIn";
</script>