
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                
              
                <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/cartas/vistas/mazo1.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                
                <!--<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Primera Edición
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="http://localhost/cartas/vistas/mazo1.php">Mazo 1</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Mazo 2</a>
                  </div>
                </li> -->
                
              
              <?php
		      
			      if ($_SESSION['Usuario']=="admin") {
			        echo ('<li class="nav-item">
              <a class="nav-link" href="http://localhost/cartas/vistas/adm_view_card.php">Gestor cartas<span class="sr-only">(current)</span></a>
          </li>');		
			        } ?>
					</ul>

				   <?php 	
						 if ($_SESSION['Usuario']=="admin"){ 
					echo ('<div class="container input-group-btn input-group navbar-form navbar-right dropdown" ><button class="btn btn-white dropdown-toggle "   type="button" data-toggle="dropdown" style="color: #000 ; background: #FFF"> Bienvenido, administrador
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						    <li><a href="http://localhost/cartas/controlador/cerrar_sesion.php">Cerrar sesion</a></li>
						  </ul></div>');

						  	}else{
						
			  	 	echo ('<div class="container input-group-btn input-group navbar-form navbar-right"><a href="http://localhost/cartas/vistas/login.php" style="color:inherit"><button type="button" class="btn btn-white" >Iniciar sesion</a></button></div>');
							}	?>
            
            
            </div>
  </nav>
