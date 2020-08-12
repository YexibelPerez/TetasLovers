<?php
session_start();

$nombre = $_SESSION['nombre'].' '.$_SESSION['apellido'];

if ($nombre == null) {
	header("Location:index.php?mensaje=nosession");
}else{

//el cierre de la llave va en lo ultimo del archivo para que ejecute todo el codigo ya que la sesion si se encuentra activa

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tetas Lovers</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="style_menu.css">
</head>
<body>
	
	<header class="cabecera on">Cabecera</header>
	<div id="menu">
		<span class="toggle-btn">&#9776;</span>
		<ul>
			<img src="logotipo.png" alt="logotipo" class="logo">
			<h3><?=$nombre?></h3>
			<h3>ADMINISTRADOR</h3>
			<li><a href="inicio.php"><i class="fas fa-home"></i> Inicio</a></li>
			<li><a href="pedidos.php"><i class="fas fa-cart-arrow-down"></i> Pedidos</a></li>
			<li><a href="clientes.php"><i class="fas fa-users"></i> Clientes</a></li>
			<li><a href="productos.php"><i class="fas fa-hand-holding-heart"></i> Productos</a></li>
			<li><a href="inventario.php"><i class="fas fa-clipboard"></i> Inventario</a></li>
			<li><a href="nosotros.php"><i class="fas fa-people-carry"> Nosotros</a></i></li>
			<li><a href="controlador_destroy.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
		</ul>
	</div>
</body>
</html>

<?php
	}
?>