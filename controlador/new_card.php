<?php

	//include('conectar_db.php');
	/*
	//Conectamos a la base de datos
	$conectar=mysqli_connect('localhost', 'root', '8559438cc');
	//Verificar
	if(!$conectar){
		echo "No se pudo conectar al servidor";
	}else{ 

		$base=mysqli_select_db($conectar,'cartitas');
		if(!$base){
			echo "no se encontro la base de datos";
		}
	}
	*/
	//Recuperar variables
	/*	$serialcarta = $_POST["SerialCarta"];
		$nombrecarta = $_POST["NombreCarta"];
		$mazo = $_POST["Mazo"];
		$edicion = $_POST["Edicion"];
		$estadocarta = $_POST["EstadoCarta"];
		$stock = $_POST["Stock"];
		$precio = $_POST["Precio"];

	$sql= "INSERT INTO cards VALUES (
										'$serialcarta',
										'$nombrecarta',
										'$mazo',
										'$edicion',
										'$estadocarta',
										'$stock',
										'$precio'
										)"; 
	//ejecutar
		$ejecutar=mysqli_query($conectar,$sql);
		if(!$ejecutar){
			echo '<script>alert("No se ejecuta")</script> ';
		 	
		}else{ 		
			echo '<script>alert("Esto funciona de lolo")</script> ';
			header ("Location: ../vistas/adm_add_card.php"); 
		}
		*/
		
	IngresarProducto($_POST['SerialCarta'], $_POST['NombreCarta'], $_POST['Mazo'], $_POST['Edicion'], $_POST['EstadoCarta'], $_POST['Stock'], $_POST['Precio']);

	function IngresarProducto($serialcarta, $nombrecarta, $mazo, $edicion, $estadocarta, $stock, $precio)
	{
		include('conectar_db.php');
		$consulta="INSERT INTO cards (SerialCarta, NombreCarta, Mazo, Edicion, EstadoCarta, Stock, Precio) VALUES ('".$serialcarta."', '".$nombrecarta."', '".$mazo."', '".$edicion."', '".$estadocarta."', '".$stock."', '".$precio."')";
		$mysqli->query($consulta) or die (mysqli_error($conexion));
	}
?>
<script type="text/javascript">
	alert("Producto agregado exitosamente.");
	window.location.href="../vistas/adm_view_card.php";
</script>