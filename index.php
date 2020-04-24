<?php 
include("funciones.php")
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="index.css" />
 	<script src="index.js"></script> 	
 </head>
 <body>
 	<button onclick="basico()">Llamar Servicio</button>
 	<p id="mensaje"></p> 
	<h2>Prueba de Conexion</h2>
	<div>
		<table>
		  <tr>
		  	<th>Id</th>
		    <th>Firstname</th>
		    <th>Lastname</th>
		  </tr>
		  <?php 		
		  	$result = mostrar_personal();
			if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) { ?>
			  <tr>
			    <td><?php  echo  $row["id"] ?></td>
			    <td><?php  echo  $row["firstname"] ?></td>
			    <td><?php  echo  $row["lastname"] ?></td>
			  </tr>
		<?php    }
		} else {
		    echo "0 results";
		} ?>
		</table>   
		 	 	
	 </div>

 	<form action="respuesta.php" method="get">
	Firstname: <input type="text" id="txtfirstname" name="firstname"><br>
	Lastname: <input  type="text" id="txtlastname"  name="lastname"><br>
	<input type="submit">
	</form>
 </body>
 </html>