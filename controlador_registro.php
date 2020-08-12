<?php 

$conex = mysqli_connect("localhost","root","","tetaslovers");

mysqli_set_charset($conex,'utf8mb4');

if (isset($_POST['register'])) {
    
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1) {
	    $name = mb_strtoupper(trim($_POST['name']));
	    $lastname = mb_strtoupper(trim($_POST['lastname']));
	    $email = strtoupper(trim($_POST['email']));
	    $pass = trim($_POST['pass']);
	    $datereg = date("d/m/y");

	    $select = "SELECT email FROM users WHERE email = '".$email."'";

		$queryselect = mysqli_query($conex,$select);	
		
		$nr = mysqli_num_rows($queryselect);

		if ($nr > 0){
			//Si es mayor a cero imprimimos que ya existe el usuario
			header("Location:register.php?mensaje=UserE");

			//echo "Ya existe este correo electrónico, porfavor ingrese uno nuevo";

		}else{
			// Si no hay resultados, ingresamos el registro a la base de datos
			
			$consulta = "INSERT INTO users(name, lastname, email, pass, date_register) VALUES ('$name','$lastname','$email','$pass','$datereg')";
		
			if (mysqli_query($conex,$consulta)){
				// Imprimimos que se ingreso correctamente
				header("Location:register.php?mensaje=UserN");
				//echo "Nuevo Registro Creado Exitosamente.";
			}else{
				// Mostramos si hay algun error al insertar registro
				echo "Error: " . $consulta . "" . mysqli_error($conex);
			}
		}
	}else{
		?>
		<h3>llena todos los campos por favor</h3>
		<?php
	}
}
?>