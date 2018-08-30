

<?php

$mysqli= new mysqli("localhost", "root", "8559438cc", "cartitas");
if ($mysqli -> connect_errno) {
	die("Falló la conexion a la Base de Datos: (" .$mysqli -> mysqli_connect_errno().")". $mysqli -> mysqli_connect_error());
}
?>
<!--
<?php
		$conexion =mysqli_connect('localhost', 'root', '8559438cc', 'cartitas')
		or die ('No se pudo conectar a la base de datos' .mysqli_error($conexion));
?>
-->