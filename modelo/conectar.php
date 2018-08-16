<?php

//Conectamos a la base de datos
$conectar=mysql_connect('localhost', 'root', '8559438cc');
//Verificar
if(!$conectar){
    echo "No se pudo conectar al servidor";
}else{ 

    $base=mysql_select_db('vertigo');
    if(!base){
        echo "no se encontro la base de datos";
    }
}
//Recuperar variables

    $nombres = $_POST["Nombres"];
    $paterno = $_POST["Paterno"];
    $materno = $_POST["Materno"];
    $rut = $_POST["Rut"];
    $fecha_nacimiento = $_POST["Fecha_nacimiento"];
    $email = $_POST["Email"];
    $telefono = $_POST["Telefono"];
    $genero = $_POST["Genero"];

$sql= "INSERT INTO concursante VALUES (	'$nombres',
                                        '$paterno',
                                        '$materno',
                                        '$email',
                                        '$rut',
                                        '$fecha_nacimiento',
                                        '$telefono',
                                        '$genero')"; 
//ejecutar
    $ejecutar=mysql_query($sql);
    if(!$ejecutar){
        echo "Tenemos un problema, revisar porfavor";
    }else{ 
          
        header("location: participantes.php");
    }
?>