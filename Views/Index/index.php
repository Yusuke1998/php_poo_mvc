<div class="container"> 
	<div class="card mt-5 col-md-5 mx-auto">
		<div class="card-title mt-md-2 h4 m-auto">
			Iniciar sesion
		</div>
		<div class="card-body">
			<form action="<?= URL ?>User/userLogin" method="post" id="sesion" name="sesion">
				<div class="form-group">
					<input type="email" name="email" id="email" value="" placeholder="Correo electronico" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" value="" placeholder="Contraseña" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" id="submit" class="btn btn-info btn-block" name="submit" value="Enviar" placeholder="">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<a href="<?=URL; ?>Index/signIn" title="Nuevo usuario para registrar!">Registrar</a>
		</div>
	</div>
</div>
<script>
	var loginUrl = "<?php echo URL; ?>User/userLogin";
	var baseurl = "<?php echo URL; ?>";
</script>