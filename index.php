<?php

	$mensaje='';

	if (isset($_GET['mensaje']) && ($_GET['mensaje'] == 'nosession')) {
		$mensaje = 'Por favor inicie sesión';
	}

	if (isset($_GET['mensaje']) && ($_GET['mensaje'] == 'bye')) {
		$mensaje = '¡Hasta luego, vuelve pronto!';
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tetas Lovers</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
		<h1>Bienvenidos a Tetas Lovers</h1>
		
		<div>

				<h2>PÁGINA PRINCIPAL</h2>

				<p>¿No tienes cuenta? <a class="link" href="register.php">Registrate</a></p>

				<p>Al registrarte, aceptas nuestras condiciones de uso y politica de privacidad.</p>

				<p>¿Ya tienes una cuenta? <a class="link" href="login.php">Iniciar Sesión</a></p>

				<strong><p><span><?=$mensaje?></span></p></strong>

		</div>
</body>
</html>