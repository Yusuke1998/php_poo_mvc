<div class="container row">
	<div class="col-md-12">
		<a class="btn btn-danger btn-sm mt-3 ml-0" href="<?=URL; ?>User/destroySession" title="Cerrar sesion">Cerrar sesion</a>
	</div>
	<?php 
		Session::start();
		$username = Session::getSession('User');
	?>
	<div class="col-md-10">
		<div class="panel">
			<div class="panel-title">
				<p class="h3" align="center">Usuario: <?=$username; ?></p>
			</div>
			<div class="panel-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		
	</div>


</div>