<?php

	session_start();
	session_unset();
	session_destroy();

	header('location: http://localhost/cartas/vistas/mazo1.php');

?>