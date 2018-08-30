<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Expires" CONTENT="0">
    <meta http-equiv="Cache-Control" CONTENT="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cartas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/estilos.css" />

</head>

<body>
<div class="container">
    <!--**** BARRA DE NAVEGACIÓN ****-->
    <?php include('../modelo/navbar.php') ?>
    


    <br>
	<div class="text-center container col-sm-offset-4 col-sm-3">
        <form id="formulario" class="form-signin" action="http://localhost/cartas/controlador/validar.php" method="post">
        <img class="mb-4" src="http://localhost/cartas/img/cardlogin.png" alt="logo" width="100" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Bienvenido</h1>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" id="inputEmail" class="form-control" autofocus placeholder="Ingrese usuario" name="Usuario">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Ingrese contraseña" name="Pass">
        <div >
            <br>
        </div>
        <button class="btn btn-lg btn-dark btn-block" type="submit">Iniciar sesion</button>
        
        </form>
        </div>
        <br>
    </div>
</div>
       

    
  
    
    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

</body>


</html>