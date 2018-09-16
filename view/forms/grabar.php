<?php
	$servername = "localhost";
	$username = "aps_sa";
	$password = "17072111";
	$database = "apspty";

	$conn = new mysqli($servername, $username, $password, $database);	// Crear Conexión con MySQL 

	if ($conn->connect_error) {											// Verificar Conexión
		die("Error en la Conexión: " . $conn->connect_error);
	} 
	else {
		$nom = htmlspecialchars($_POST["name"]);
		$ape = htmlspecialchars($_POST["lastname"]);
		$mai = htmlspecialchars($_POST["email"]);
		$ciu = htmlspecialchars($_POST["city"]);
		$mes = htmlspecialchars($_POST["message"]);
		
		$sqlString = "INSERT INTO contactenos(nombre, apellido, correo, ciudad, mensaje) ";
		$sqlString = $sqlString . "VALUES ('$nom','$ape','$mai','$ciu','$mes');";
			
		if ($conn->query($sqlString) === TRUE) {
			print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias.html\">";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	mysqli_close($conn);
?>