<?php

	$mensaje='';

	if (isset($_GET['mensaje']) && ($_GET['mensaje'] == 'UserE')) {
		$mensaje = 'Este correo electrónico ya esta registrado, porfavor ingrese uno nuevo';
	}

	if (isset($_GET['mensaje']) && ($_GET['mensaje'] == 'UserN')) {
		$mensaje = 'Nuevo registro creado exitosamente';
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<title>REGISTRO</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="styles_principal.css">
</head>
<body>
	<form class="formulario register" action="controlador_registro.php" method="post">
		
		<div class="contenedor">

			<h1>REGISTRO</h1>
			
			<div class="input-contenedor">
				<i class="fas fa-user icon"></i>
				<input type="text" name="name" placeholder="Nombre">
				<input type="text" name="lastname" placeholder="Apellido">
			</div>
			
				<div class="input-contenedor">
				<i class="fas fa-envelope icon"></i>
				<input type="email" name="email" placeholder="Correo Electrónico">
			</div>

				<div class="input-contenedor">
				<i class="fas fa-key icon"></i>
				<input type="password" name="pass" placeholder="Contraseña">
			</div>

				<input type="submit" name="register" value="Regístrate" class="button">

				<strong><p><span><?=$mensaje?></span></p></strong>

				<p>Al registrarte, aceptas nuestras condiciones de uso y politica de privacidad.</p>

				<p>¿Ya tienes una cuenta? <a class="link" href="login.php">Iniciar Sesión</a></p>


		</div>
	</form>
	<?php 
        include("controlador_registro.php");
    ?>
</body>
</html>