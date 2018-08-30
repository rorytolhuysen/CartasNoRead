<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="Expires" CONTENT="0">
    <meta http-equiv="Cache-Control" CONTENT="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cartas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" media="screen" href="../css/estilos.css" />

</head>

<body>
<div class="container">
    <!--**** BARRA DE NAVEGACIÓN ****-->
  
    <?php include('../modelo/navbar.php') ?>
    
   
      
      <div class="container-fluid">
          <h2>Lista de cartas</h2>
          <p>Buscador</p>

          <table>
            <form method="POST" action="adm_view_card.php">
              <div class="form-group has has-success">
              <div class="form-group has-success" >
                <input type="text" name="palabra" required="Debe ingresar Dato" class="form-control">
                <br>
                <div class="form-group">
                <button type="submit" name="buscar" class="btn btn-dark">Buscar</button></a>
                </div>
              </div>
              </div>
            </form>
            <br>
            <?php
              if(isset($_POST['palabra'])){
                require_once "../controlador/conectar_db.php";
                require_once "../controlador/buscar.php";
              }
            ?>
          </table>
         
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Serial carta</th>
                <th>Nombre carta</th>
                <th>Mazo</th>
                <th>Edición</th>
                <th>Estado de carta</th>
                <th>Stock</th>
                <th>Precio</th>
                
                
              </tr>
            </thead>

            <tbody id="myTable">

            <?php
              $conexion= new mysqli('localhost', 'root', '8559438cc', 'cartitas');
              $query="SELECT * FROM cards";
              $resultado= $conexion->query($query);
              while ($row=$resultado->fetch_assoc()){
				    ?>
           
					<tr align="right">
						<td><?php echo $row['SerialCarta'];?></td>
						<td><?php echo $row['NombreCarta'];?></td>
						<td><?php echo $row['Mazo'];?></td>
						<td><?php echo $row['Edicion'];?></td>
						<td><?php echo $row['EstadoCarta'];?></td>
						<td><?php echo $row['Stock'];?></td>
            <td><?php echo $row['Precio'];?></td>
						
					</tr>

            <?php
              }
            ?>
         </tbody>
          </table> 
          
        </div>
      </div>

        
    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</body>


</html>