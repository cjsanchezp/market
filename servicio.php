<?php 
include("funciones.php");
$operacion = $_POST["operacion"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];


if ($operacion=="obtenerhtml") {
	$tbody = "";

	$result = mostrar_personal();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { 
			 $tbody = $tbody."<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>";
			 echo  $tbody;
		}

		} else {
		    echo "0 results";
		} 
}

if ($operacion=="obtenerjson") {
	$colleccionpersonal = array();

	$result = mostrar_personal();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { 
			$row = array('id' => $row["id"],'firstname' => $row["firstname"],'lastname' => $row["lastname"] );
			array_push($colleccionpersonal, $row);
		}
		echo json_encode($colleccionpersonal);

		} else {
		    echo "0 results";
		} 
}

if ($operacion=="insertar") {
	
$respuesta = insertar_personal($firstname, $lastname);

echo json_encode($respuesta);
}



 ?>