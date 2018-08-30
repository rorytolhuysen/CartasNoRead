<?php 
	$palabra=$_POST['palabra'];
	$consulta="SELECT * FROM cards WHERE NombreCarta LIKE '%$palabra%'";
   
	$consulta2=$mysqli->query($consulta);
	if($consulta2->num_rows>=1){
		echo "<table class='table table-bordered table-striped'>
        <thead>
          <tr>
            <th>Serial carta</th>
            <th>Nombre carta</th>
            <th>Mazo</th>
            <th>Edición</th>
            <th>Estado de carta</th>
            <th>Stock</th>
            <th>Precio</th>
			<th colspan='2'>Acciones</th>
			
            
          </tr>
        </thead>";
			
     		
        
      
      		while($resultadoproductos =$consulta2-> fetch_array(MYSQLI_BOTH))
      		{
        		echo "<tr>";
           	  	echo "<td>"; echo $resultadoproductos['SerialCarta']; echo"</td>";
           		echo "<td>"; echo $resultadoproductos['NombreCarta']; echo"</td>";
       			echo "<td>"; echo $resultadoproductos['Mazo']; echo"</td>";
       			echo "<td>"; echo $resultadoproductos['Edicion']; echo "</td>";
                echo "<td>"; echo $resultadoproductos['EstadoCarta']; echo "</td>";
                echo "<td>"; echo $resultadoproductos['Stock']; echo "</td>";
				echo "<td>"; echo $resultadoproductos['Precio']; echo "</td>";
				echo "<td align='center'> <a href='adm_mod_card.php?SerialCarta=".$resultadoproductos['SerialCarta']."'> <button type='button' class='btn btn-default'>Modificar</button> </a>";
				echo "<td align='center'> <a href='http://localhost/cartas/controlador/del_card.php?SerialCarta=".$resultadoproductos['SerialCarta']."'><button type='button' class='btn btn-default'>Eliminar</button></a></td>"; 
				
				echo "</tr>";   
            
     		}
     		echo "</tbody>
  			</table>";
	}else{
		echo 'No se encontro registro con la palabra '.$palabra;
		
	}



?>

	