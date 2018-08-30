<?php
/*
	//Conectamos a la base de datos
	$conectar=mysql_connect('localhost', 'root', '8559438cc');
	//Verificar
	if(!$conectar){
		echo "No se pudo conectar al servidor";
	}else{ 

		$base=mysql_select_db('cartitas');
		if(!$base){
			echo "no se encontro la base de datos";
		}
	}
*/
	ModificarProducto($_REQUEST['SerialCarta'], $_POST['NombreCarta'], $_POST['Mazo'], $_POST['Edicion'], $_POST['EstadoCarta'], $_POST['Stock'], $_POST['Precio']);

	function ModificarProducto($serialcarta, $nombrecarta, $mazo, $edicion, $estadocarta, $stock, $precio)
	{
		include "conectar_db.php";
		$consulta="UPDATE cards SET NombreCarta='".$nombrecarta."', Mazo='".$mazo."', Edicion='".$edicion."', EstadoCarta='".$estadocarta."', Stock='".$stock."', Precio='".$precio."' WHERE SerialCarta='".$serialcarta."'";
		$mysqli->query($consulta) or die ("Error al actualizar datos.".mysqli_error($conexion));
	}
?>
<script type="text/javascript">
	alert("Datos actualizados exitosamente.");
	window.location.href="../vistas/adm_view_card.php";
</script>