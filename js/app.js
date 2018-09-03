// ----------AGREGAR CLIENTE----------- //
function agregarCliente(){

	var url= '../controlador/new_card.php';
	$.ajax({
		type:'POST',
		url:url,
		data: $('#registration_form').serialize(),
		
	

	
	})
}
	
	

//---------MODIFICAR CLIENTE-----------//

$(function(){
	$("#boton_mod").click(function(){
		var url="../controlador/mod_card.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#form_mod").serialize(),
			success:function(data){
				//$("#resultado").html(data);
				console.log("mati rico")
				$('#form_mod')[0].reset();
			}
		});
		return false;
	});
});


//----------ELIMINAR CLIENTE-----------//

function borrarClientes(){
	
	var dato= $('#SerialCarta').val();
	var url='../controlador/del_card.php';

	var pregunta = confirm('Esta seguro que desea ELIMINAR este Cliente');
	if (pregunta==true){

	$.ajax({

		type:'POST',
		url:url,
		data:'id='+dato,
		success: function(valor){

			alert('SE ELIMINA CORRECTAMENTE.....');
			$('#formBusqueda')[0].reset();
			$('#formEliminar')[0].reset();
			$("label[for='nombre']").text("");
			
			
			return false;
		}
		
	})
	return false;



	}else{
		return false;
	}




	};