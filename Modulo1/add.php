<?php
/*
| -----------------------------------------------------
| PROYECTO: 		PHP CRUD usando PDO y Bootstrap
| -----------------------------------------------------
| AUTOR:			ANTHONCODE
| -----------------------------------------------------
| FACEBOOK:			FACEBOOK.COM/ANTHONCODE
| -----------------------------------------------------
| COPYRIGHT:		AnthonCode
| -----------------------------------------------------
| WEBSITE:			http://4avisos.com
| -----------------------------------------------------
*/
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			// hacer uso de una declaración preparada para evitar la inyección de sql
			$stmt = $db->prepare("INSERT INTO maestros (nempleado, nombre) VALUES (:nempleado, :nombre)");
			// declaración if-else en la ejecución de nuestra declaración preparada
			$_SESSION['message'] = ( $stmt->execute(array(':nempleado' => $_POST['nempleados'] , ':nombre' => $_POST['nombre'])) ) ? 'Miembro agregado correctamente' : 'Something went wrong. Cannot add member';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: index.php');
	
?>
