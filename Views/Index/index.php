<div class="container"> 
	<div class="card mt-5">
		<div class="card-title mt-2 h4 m-auto">
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
	</div>
</div>