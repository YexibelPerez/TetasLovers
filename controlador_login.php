<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tetaslovers";

$conex = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

mysqli_set_charset($conex,'utf8mb4');

if (!$conex) {
	die("No hay conexión: ".mysqli_connect_error());
}

$email = $_POST["email"];
$pass = $_POST["pass"];

$consulta = "SELECT * FROM users WHERE email = '".$email."' and pass = '".$pass."'";

$query = mysqli_query($conex, $consulta);
$nr = mysqli_num_rows($query);
$datos = mysqli_fetch_assoc($query);

if($nr == 1){
	session_start();
	$_SESSION['nombre'] = $datos['name'];
	$_SESSION['apellido'] = $datos['lastname'];
	header ("Location: inicio.php");
	//echo "Bienvenido " .$_SESSION['apellido'];
}else if ($nr == 0) {
	header ("Location: login.php");
	echo "Ups ha ocurrido un error, por favor vuelve a intentar";
}
?>