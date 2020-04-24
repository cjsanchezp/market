<?php 

function conexionDB(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "market";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
	
}

function mostrar_personal(){
	$conn = conexionDB();
	$sql = "SELECT id,firstname,lastname FROM personal";
	$result = $conn->query($sql);

	return $result;
}

function insertar_personal($firstname, $lastname){
	$conn = conexionDB();
	$sql = "INSERT INTO personal (firstname, lastname) VALUES ('$firstname','$lastname')";

	if ($conn->query($sql) === TRUE) {
	    return "Se insertó correctamente";
	} else {
	    return "Error: " . $sql . "<br>" . $conn->error;
	}

}

 ?>