<?php

	class conexion{
			function recuperarDatos (){
				include('conectar_db.php'); 		//Conecta base de datos
				$query = "SELECT * FROM cards";	 	//Petición
				$resultado = mysqli_query($conexion, $query);

				while ($fila = mysqli_fetch_array($resultado)) {
					echo "<tr>";
					echo "<td>$fila[SerialCarta]</td> <td> $fila[NombreCarta] </td>	<td> $fila[Mazo] </td>	<td> $fila[Edicion] </td> <td> $fila[EstadoCarta] </td> <td>$fila[Stock]</td> <td>$fila[Precio]</td> ";
					echo "";
					echo "";
					echo "</tr>";
				}
			}
		}
?>