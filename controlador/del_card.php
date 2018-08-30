<?php

	//Conectamos a la base de datos
	$conectar=mysql_connect('localhost', 'root', '8559438cc');
	//Verificar
	if(!$conectar){
		echo "No se pudo conectar al servidor";
	}else{ 

		$base=mysql_select_db('cartitas');
		if(!base){
			echo "no se encontro la base de datos";
		}
	}
	//Recuperar variables
		$PK = $_REQUEST["SerialCarta"];

	$sql= "DELETE FROM cards WHERE SerialCarta= '$PK' ";

	//ejecutar
		$ejecutar=mysql_query($sql);
		if(!$ejecutar){
			echo "Tenemos un problema, revisar porfavor";
		}else{ 
	      	
			header("location: ../vistas/adm_view_card.php");
		}
?>