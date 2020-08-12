<!DOCTYPE html>
<html lang="es">
<head>
	<title>INICIO DE SESIÓN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="styles_principal.css">
</head>
<body>
	<form class="formulario login" action="controlador_login.php" method="post">
		
		<div class="contenedor">

			<h1>INICIO DE SESIÓN</h1>

				<div class="input-contenedor">
				<i class="fas fa-envelope icon"></i>
				<input type="email" name="email" placeholder="Correo Electrónico">
			</div>

				<div class="input-contenedor">
				<i class="fas fa-key icon"></i>
				<input type="password" name="pass" placeholder="Contraseña">
			</div>
				<input type="submit" value="Iniciar Sesión" class="button">

				<p><a class="link">¿Olvidaste tu contraseña?</a></p>

				<p>¿No tienes cuenta? <a class="link" href="register.php">Registrate</a></p>
				<span></span>
		</div>
	</form>
</body>
</html>